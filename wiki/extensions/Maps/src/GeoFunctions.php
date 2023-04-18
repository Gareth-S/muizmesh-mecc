<?php

declare( strict_types = 1 );

namespace Maps;

use DataValues\Geo\Values\LatLongValue;

/**
 * Static class containing geographical functions.
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 * @author Pnelnik
 * @author Matěj Grabovský
 */
final class GeoFunctions {

	// The approximate radius of the earth in meters, according to http://en.wikipedia.org/wiki/Earth_radius.
	private const EARTH_RADIUS = 6371000;

	/**
	 * Returns the geographical distance between two coordinates.
	 * See http://en.wikipedia.org/wiki/Geographical_distance
	 *
	 * @since 2.0
	 *
	 * @param LatLongValue $start
	 * @param LatLongValue $end
	 *
	 * @return float Distance in m.
	 */
	public static function calculateDistance( LatLongValue $start, LatLongValue $end ) {
		$northRad1 = deg2rad( $start->getLatitude() );
		$eastRad1 = deg2rad( $start->getLongitude() );

		$cosNorth1 = cos( $northRad1 );
		$cosEast1 = cos( $eastRad1 );

		$sinNorth1 = sin( $northRad1 );
		$sinEast1 = sin( $eastRad1 );

		$northRad2 = deg2rad( $end->getLatitude() );
		$eastRad2 = deg2rad( $end->getLongitude() );

		$cosNorth2 = cos( $northRad2 );
		$cosEast2 = cos( $eastRad2 );

		$sinNorth2 = sin( $northRad2 );
		$sinEast2 = sin( $eastRad2 );

		$term1 = $cosNorth1 * $sinEast1 - $cosNorth2 * $sinEast2;
		$term2 = $cosNorth1 * $cosEast1 - $cosNorth2 * $cosEast2;
		$term3 = $sinNorth1 - $sinNorth2;

		$distThruSquared = $term1 * $term1 + $term2 * $term2 + $term3 * $term3;

		$distance = 2 * self::EARTH_RADIUS * asin( sqrt( $distThruSquared ) / 2 );

		if ( $distance < 0 ) {
			throw new \LogicException();
		}

		return $distance;
	}

	/**
	 * Finds a destination given a starting location, bearing and distance.
	 *
	 * @since 2.0
	 *
	 * @param LatLongValue $startingCoordinates
	 * @param float $bearing The initial bearing in degrees.
	 * @param float $distance The distance to travel in km.
	 *
	 * @return array The destination coordinates, as non-directional floats in an array with lat and lon keys.
	 */
	public static function findDestination( LatLongValue $startingCoordinates, $bearing, $distance ) {
		$startingCoordinates = [
			'lat' => deg2rad( $startingCoordinates->getLatitude() ),
			'lon' => deg2rad( $startingCoordinates->getLongitude() ),
		];

		$radBearing = deg2rad( (float)$bearing );
		$angularDistance = $distance / self::EARTH_RADIUS;

		$lat = asin(
			sin( $startingCoordinates['lat'] ) * cos( $angularDistance ) + cos( $startingCoordinates['lat'] ) * sin(
				$angularDistance
			) * cos( $radBearing )
		);
		$lon = $startingCoordinates['lon'] + atan2(
				sin( $radBearing ) * sin( $angularDistance ) * cos( $startingCoordinates['lat'] ),
				cos( $angularDistance ) - sin( $startingCoordinates['lat'] ) * sin( $lat )
			);

		return [
			'lat' => rad2deg( $lat ),
			'lon' => rad2deg( $lon )
		];
	}

}
