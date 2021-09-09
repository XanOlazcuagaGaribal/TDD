<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    public function testOne()
    {
        $this->assertEquals([], PrimeFactors::generate(1), "1 n'a pas de facteur premier");
    }

    public function testTwo()
    {
        $this->assertEquals([2], PrimeFactors::generate(2), "2 a un seul facteur premier");
    }

    public function testThree()
    {
        $this->assertEquals([3], PrimeFactors::generate(3), "3 a un seul facteur premier");
    }

    public function testFour()
    {
        $this->assertEquals([2, 2], PrimeFactors::generate(4), "4 a 2 facteurs premiers");
    }

    public function testFive()
    {
        $this->assertEquals([5], PrimeFactors::generate(5), "5 a un seul facteur premier");
    }

    public function testSeven()
    {
        $this->assertEquals([7], PrimeFactors::generate(7), "5 a un seul facteur premier");
    }
    public function testHeight()
    {
        $this->assertEquals([2, 2, 2], PrimeFactors::generate(8), "8 a 3 facteurs premiers");
    }
    public function testNine()
    {
        $this->assertEquals([3, 3], PrimeFactors::generate(9), "8 a 3 facteurs premiers");
    }
    public function test125()
    {
        $this->assertEquals([5, 5, 5], PrimeFactors::generate(125), "8 a 3 facteurs premiers");
    }

}