<?php

declare( strict_types = 1 );

namespace Maps\LegacyModel;

use DataValues\Geo\Values\LatLongValue;

/**
 * @since 3.0
 *
 * @licence GNU GPL v2+
 * @author Kim Eik < kim@heldig.org >
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class ImageOverlay extends Rectangle {

	private $imageUrl;

	public function __construct( LatLongValue $boundsNorthEast, LatLongValue $boundsSouthWest, string $image ) {
		parent::__construct( $boundsNorthEast, $boundsSouthWest );

		$this->imageUrl = $image;
	}

	public function getImage(): string {
		return $this->imageUrl;
	}

	public function getJSONObject( string $defText = '', string $defTitle = '' ): array {
		$data = parent::getJSONObject( $defText, $defTitle );

		$data['image'] = $this->imageUrl;

		return $data;
	}

}
