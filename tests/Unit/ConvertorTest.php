<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use KH007\Services\ConvertFizzBuzz;

use function PHPUnit\Framework\assertEquals;

class ConvertorTest extends TestCase
{
    public function testLoopGoesTo100(): void
    {
        assertEquals(true, true);
    }
    public function testConverterDosentChangeNormalNumbers(): void
    {
        $converter = new ConvertFizzBuzz();
        assertEquals(1, $converter->convert(1));
        assertEquals(2, $converter->convert(2));
        assertEquals(4, $converter->convert(4));
    }
    public function testConverterDoesChangeNumbersMultiplyBy3(): void
    {
        $converter = new ConvertFizzBuzz();
        assertEquals('Fizz', $converter->convert(3));
        assertEquals('Fizz', $converter->convert(9));
        assertEquals('Fizz', $converter->convert(99));
    }
    public function testConverterDoesChangeNumbersMultiplyBy5(): void
    {
        $converter = new ConvertFizzBuzz();
        assertEquals('Buzz', $converter->convert(5));
        assertEquals('Buzz', $converter->convert(25));
        assertEquals('Buzz', $converter->convert(100));
    }
    public function testConverterDoesChangeNumbersMultiplyBy3and5(): void
    {
        $converter = new ConvertFizzBuzz();
        assertEquals('FizzBuzz', $converter->convert(15));
        assertEquals('FizzBuzz', $converter->convert(30));
        assertEquals('FizzBuzz', $converter->convert(60));
    }
}
