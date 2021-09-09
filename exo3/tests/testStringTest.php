<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class testStringTest extends TestCase
{
    public function testOne()
    {
        $this->assertEquals('()', TestString::testStringContains("()"), "Il y a des parenthèses");
    }

    public function testTwo()
    {
        $this->assertEquals('()', TestString::testStringContains("()"), "Il y a des parenthèses");
    }
}