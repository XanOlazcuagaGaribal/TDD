<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ExoTddTest extends TestCase
{
    public function testBissex1(): void
    {
        $this->assertEquals(true, ExoTDD::exo1(4));
    }
    public function testBissex2(): void
    {
        $this->assertEquals(true, ExoTDD::exo1(400));
    }
    public function testBissex3(): void
    {
        $this->assertEquals(false, ExoTDD::exo1(100));
    }
}