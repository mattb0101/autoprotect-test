<?php

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
    public function testToCheckIfNumberIsPrime()
    {
        require 'primes.php';

        $this->assertEquals(1, isPrime(3));
        $this->assertEquals(0, isPrime(16));

    }
}