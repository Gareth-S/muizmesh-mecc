<?php

declare( strict_types = 1 );

namespace Maps\Tests\Integration;

use Maps\Presentation\MapsDistanceParser;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Maps\Presentation\MapsDistanceParser
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class MapsDistanceParserTest extends TestCase {

	public static $distances = [
		'1' => 1,
		'1m' => 1,
		'1 m' => 1,
		'   1   	  m ' => 1,
		'1.1' => 1.1,
		'1,1' => 1.1,
		'1 km' => 1000,
		'42 km' => 42000,
		'4.2 km' => 4200,
		'4,20km' => 4200,
		'1 mile' => 1609.344,
		'10 nauticalmiles' => 18520,
		'1.0nautical mile' => 1852,
	];
	public static $formatTests = [
		'm' => [
			'1 m' => 1,
			'1000 m' => 1000.00,
			'42.42 m' => 42.42,
			'42.4242 m' => 42.4242,
		],
		'km' => [
			//'0.001 km' => 1,
			'1 km' => 1000,
			'4.24 km' => 4242,
		],
		'kilometers' => [
			'0.001 kilometers' => 1,
			'1 kilometers' => 1000,
			'4.24 kilometers' => 4242,
		],
	];
	/**
	 * Invalid distances.
	 *
	 * @var array
	 */
	public static $fakeDistances = [
		'IN YOUR CODE, BEING TOTALLY RIDICULOUS',
		'0x20 km',
		'km 42',
		'42 42 km',
		'42 km km',
		'42 foo',
		'3.4.2 km'
	];

	public function setUp(): void {
		if ( !defined( 'MEDIAWIKI' ) ) {
			$this->markTestSkipped( 'MediaWiki is not available' );
		}
	}

	/**
	 * Tests Maps\Presentation\MapsDistanceParser::parseDistance()
	 */
	public function testParseDistance() {
		foreach ( self::$distances as $rawValue => $parsedValue ) {
			$this->assertEquals(
				$parsedValue,
				MapsDistanceParser::parseDistance( (string)$rawValue ),
				"'$rawValue' was not parsed to '$parsedValue':"
			);
		}

		foreach ( self::$fakeDistances as $fakeDistance ) {
			$this->assertFalse(
				MapsDistanceParser::parseDistance( $fakeDistance ),
				"'$fakeDistance' should not be recognized:"
			);
		}
	}

	/**
	 * Tests Maps\Presentation\MapsDistanceParser::formatDistance()
	 */
	public function testFormatDistance() {
		foreach ( self::$formatTests['km'] as $rawValue => $parsedValue ) {
			$this->assertEquals(
				$rawValue,
				MapsDistanceParser::formatDistance( $parsedValue, 'km' ),
				"'$parsedValue' was not formatted to '$rawValue':"
			);
		}
	}

	/**
	 * Tests Maps\Presentation\MapsDistanceParser::parseAndFormat()
	 */
	public function testParseAndFormat() {
		$this->assertSame(
			'42,000 m',
			MapsDistanceParser::parseAndFormat( '42 km', 'm' )
		);

		$this->assertSame(
			'42 km',
			MapsDistanceParser::parseAndFormat( '42000 m', 'km' )
		);
	}

	/**
	 * Tests Maps\Presentation\MapsDistanceParser::isDistance()
	 */
	public function testIsDistance() {
		foreach ( self::$fakeDistances as $fakeDistance ) {
			$this->assertFalse(
				MapsDistanceParser::isDistance( $fakeDistance ),
				"'$fakeDistance' should not be recognized:"
			);
		}

		foreach ( self::$distances as $distance ) {
			$this->assertTrue( MapsDistanceParser::isDistance( (string)$distance ), "'$distance' was not be recognized:" );
		}
	}

	/**
	 * Tests Maps\Presentation\MapsDistanceParser::getUnitRatio()
	 */
	public function testGetUnitRatio() {
		foreach ( $GLOBALS['egMapsDistanceUnits'] as $unit => $ratio ) {
			$r = MapsDistanceParser::getUnitRatio( $unit );
			$this->assertEquals( $ratio, $r, "The ratio for '$unit' should be '$ratio' but was '$r'" );
		}
	}

	/**
	 * Tests Maps\Presentation\MapsDistanceParser::getValidUnit()
	 */
	public function testGetValidUnit() {
		foreach ( $GLOBALS['egMapsDistanceUnits'] as $unit => $ratio ) {
			$u = MapsDistanceParser::getValidUnit( $unit );
			$this->assertEquals( $unit, $u, "The valid unit for '$unit' should be '$unit' but was '$u'" );
		}

		global $egMapsDistanceUnit;

		foreach ( [ '0', 'swfwdffdhy', 'dxwgdrfh' ] as $unit ) {
			$u = MapsDistanceParser::getValidUnit( $unit );
			$this->assertEquals(
				$egMapsDistanceUnit,
				$u,
				"The valid unit for '$unit' should be '$egMapsDistanceUnit' but was '$u'"
			);
		}
	}

	/**
	 * Tests Maps\Presentation\MapsDistanceParser::getUnits()
	 */
	public function testGetUnits() {
		$this->assertEquals( array_keys( $GLOBALS['egMapsDistanceUnits'] ), MapsDistanceParser::getUnits() );
	}

}
