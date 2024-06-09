<?php
use PHPUnit\Framework\TestCase;
use Danishi\SafeImplode;

class SafeImplodeTest extends TestCase
{
    public function testSafeImplodeWithArray()
    {
        $separator = ',';
        $value = ['a', 'b', 'c'];
        $expected = 'a,b,c';
        $this->assertEquals($expected, SafeImplode::safeImplode($separator, $value));
    }

    public function testSafeImplodeWithNonArray()
    {
        $separator = ',';
        $value = 'not an array';
        $this->assertEquals($value, SafeImplode::safeImplode($separator, $value));
    }
}
