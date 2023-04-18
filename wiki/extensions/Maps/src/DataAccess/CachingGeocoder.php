<?php

declare( strict_types = 1 );

namespace Maps\DataAccess;

use BagOStuff;
use DataValues\Geo\Values\LatLongValue;
use Jeroen\SimpleGeocoder\Geocoder;

/**
 * @since 5.0
 *
 * @licence GNU GPL v2+
 * @author HgO < hgo@batato.be >
 */
class CachingGeocoder implements Geocoder {

	private Geocoder $geocoder;
	private BagOStuff $cache;
	private int $cacheTtl;

	public function __construct( Geocoder $geocoder, BagOStuff $cache, int $cacheTtl ) {
		$this->geocoder = $geocoder;
		$this->cache = $cache;
		$this->cacheTtl = $cacheTtl;
	}

	public function geocode( string $address ): ?LatLongValue {
		$key = $this->cache->makeKey( __CLASS__, $address );

		$coordinates = $this->cache->get( $key );

		// There was no entry in the cache, so we retrieve the coordinates
		if ( $coordinates === false ) {
			$coordinates = $this->geocoder->geocode( $address );

			$this->cache->set( $key, $coordinates, $this->cacheTtl );
		}

		return $coordinates;
	}
}
