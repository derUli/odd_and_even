<?php
use function OddAndEven\isEven;
use function OddAndEven\isOdd;

class OddAndEvenTest extends \PHPUnit\Framework\TestCase {
	public function testIsEvenWithIntegerExpectTrue() {
		$this->assertTrue ( isEven ( 2 ) );
		$this->assertTrue ( isEven ( 56 ) );
		$this->assertTrue ( isEven ( 100 ) );
	}
	public function testIsEvenWithIntegerExpectFalse() {
		$this->assertFalse ( isEven ( 1 ) );
		$this->assertFalse ( isEven ( 13 ) );
	}
	public function testIsOddWithIntegerExpectTrue() {
		$this->assertTrue ( isOdd ( 1 ) );
		$this->assertTrue ( isOdd ( 13 ) );
		$this->assertTrue ( isOdd ( pi () ) );
	}
	public function testIsOddWithIntegerExpectFalse() { //
		$this->assertFalse ( isOdd ( 2 ) );
		$this->assertFalse ( isOdd ( 56 ) );
		$this->assertFalse ( isOdd ( 100 ) );
	}
	public function testIsEvenWithFloatExpectTrue() {
		$this->assertTrue ( isEven ( 1.99 ) );
		$this->assertTrue ( isEven ( 5.95 ) );
		$this->assertTrue ( isEven ( 6.10 ) );
	}
	public function testIsEvenWithFloatExpectFalse() {
		$this->assertFalse ( isEven ( 0.99 ) );
		$this->assertFalse ( isEven ( 8.99 ) );
		$this->assertFalse ( isEven ( 18.95 ) );
	}
	public function testIsOddWithFloatExpectTrue() {
		$this->assertTrue ( isOdd ( 1.12 ) );
		$this->assertTrue ( isOdd ( 11.05 ) );
		$this->assertTrue ( isOdd ( pi () ) );
	}
	public function testIsOddWithFloatExpectFalse() { //
		$this->assertFalse ( isOdd ( 2.10 ) );
		$this->assertFalse ( isOdd ( 56.42 ) );
		$this->assertFalse ( isOdd ( 100 ) );
	}
	public function testIsEvenWithInvalidArgument() {
		try {
			isOdd ( "not a number" );
			$this->fail ( "Expected exception not thrown" );
		} catch ( Exception $e ) {
			$this->assertInstanceOf ( \InvalidArgumentException::class, $e );
		}
	}
	public function testIsOddWithInvalidArgument() {
		try {
			isEven ( "not a number" );
			$this->fail ( "Expected exception not thrown" );
		} catch ( Exception $e ) {
			$this->assertInstanceOf ( \InvalidArgumentException::class, $e );
		}
	}
}
