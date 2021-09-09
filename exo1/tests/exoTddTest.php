<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ExoTddTest extends TestCase
{
    public function testBissex1(): void
    {
        $this->assertEquals(true, ExoTDD::isLeap(1600));
        $this->assertNotEquals(true, ExoTDD::isLeap(100));
    }
    
}