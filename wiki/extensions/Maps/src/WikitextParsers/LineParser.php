<?php

declare( strict_types = 1 );

namespace Maps\WikitextParsers;

use DataValues\Geo\Values\LatLongValue;
use Jeroen\SimpleGeocoder\Geocoder;
use Maps\LegacyModel\Line;
use Maps\MapsFactory;
use ValueParsers\StringValueParser;
use ValueParsers\ValueParser;

/**
 * ValueParser that parses the string representation of a line.
 *
 * @since 3.0
 *
 * @licence GNU GPL v2+
 * @author Kim Eik
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class LineParser implements ValueParser {

	private string $metaDataSeparator = '~';
	private ?Geocoder $geocoder = null;

	public function setGeocoder( Geocoder $geocoder ) {
		$this->geocoder = $geocoder;
	}

	private function getGeocoder(): Geocoder {
		if ( $this->geocoder == null ) {
			$this->geocoder = MapsFactory::globalInstance()->getGeocoder();
		}

		return $this->geocoder;
	}

	/**
	 * @see StringValueParser::stringParse
	 *
	 * @since 3.0
	 *
	 * @param string $value
	 */
	public function parse( $value ): Line {
		$parts = explode( $this->metaDataSeparator, $value );

		$line = $this->constructShapeFromLatLongValues(
			$this->parseCoordinates(
				explode( ':', array_shift( $parts ) )
			)
		);

		$this->handleCommonParams( $parts, $line );

		return $line;
	}

	protected function constructShapeFromLatLongValues( array $locations ): Line {
		return new Line( $locations );
	}

	/**
	 * @since 3.0
	 *
	 * @param string[] $coordinateStrings
	 *
	 * @return LatLongValue[]
	 */
	protected function parseCoordinates( array $coordinateStrings ): array {
		$coordinates = [];

		foreach ( $coordinateStrings as $coordinateString ) {
			$coordinate = $this->getGeocoder()->geocode( $coordinateString );

			if ( $coordinate !== null ) {
				// TODO: good if the user knows something has been omitted
				$coordinates[] = $coordinate;
			}
		}

		return $coordinates;
	}

	/**
	 * This method requires that parameters are positionally correct,
	 * 1. Link (one parameter) or bubble data (two parameters)
	 * 2. Stroke data (three parameters)
	 * 3. Fill data (two parameters)
	 * e.g ...title~text~strokeColor~strokeOpacity~strokeWeight~fillColor~fillOpacity
	 *
	 * @since 3.0
	 *
	 * @param array $params
	 * @param Line $line
	 */
	protected function handleCommonParams( array &$params, Line &$line ) {
		//Handle bubble and link parameters

		//create link data
		$linkOrTitle = array_shift( $params ) ?? '';
		if ( $link = $this->isLinkParameter( $linkOrTitle ) ) {
			$this->setLinkFromParameter( $line, $link );
		} else {
			//create bubble data
			$this->setBubbleDataFromParameter( $line, $params, $linkOrTitle );
		}

		//handle stroke parameters
		if ( $color = array_shift( $params ) ) {
			$line->setStrokeColor( $color );
		}

		if ( $opacity = array_shift( $params ) ) {
			$line->setStrokeOpacity( $opacity );
		}

		if ( $weight = array_shift( $params ) ) {
			$line->setStrokeWeight( $weight );
		}
	}

	/**
	 * Checks if a string is prefixed with link:
	 *
	 * @static
	 *
	 * @param $link
	 *
	 * @return bool|string
	 * @since 2.0
	 */
	private function isLinkParameter( $link ) {
		if ( strpos( $link, 'link:' ) === 0 ) {
			return substr( $link, 5 );
		}

		return false;
	}

	protected function setLinkFromParameter( Line &$line, $link ) {
		if ( filter_var( $link, FILTER_VALIDATE_URL ) ) {
			$line->setLink( $link );
		} else {
			$title = \Title::newFromText( $link );
			$line->setLink( $title->getFullURL() );
		}
	}

	protected function setBubbleDataFromParameter( Line &$line, &$params, $title ) {
		if ( $title ) {
			$line->setTitle( $title );
		}
		if ( $text = array_shift( $params ) ) {
			$line->setText( $text );
		}
	}

}
