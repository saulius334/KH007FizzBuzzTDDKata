<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use KH007\Services\ConvertFizzBuzz;

use function PHPUnit\Framework\assertEquals;

class ConvertorTest extends TestCase
{
    protected ConvertFizzBuzz $converter;
    protected function setUp(): void
    {
        $this->converter = new ConvertFizzBuzz();
    }
    public function testConverterDosentChangeNormalNumbers(): void
    {
        assertEquals(1, $this->converter->convert(1));
        assertEquals(2, $this->converter->convert(2));
        assertEquals(4, $this->converter->convert(4));
    }
    public function testConverterDoesChangeNumbersMultiplyBy3(): void
    {
        assertEquals('Fizz', $this->converter->convert(3));
        assertEquals('Fizz', $this->converter->convert(9));
        assertEquals('Fizz', $this->converter->convert(99));
    }
    public function testConverterDoesChangeNumbersMultiplyBy5(): void
    {
        assertEquals('Buzz', $this->converter->convert(5));
        assertEquals('Buzz', $this->converter->convert(25));
        assertEquals('Buzz', $this->converter->convert(100));
    }
    public function testConverterDoesChangeNumbersMultiplyBy3and5(): void
    {
        assertEquals('FizzBuzz', $this->converter->convert(15));
        assertEquals('FizzBuzz', $this->converter->convert(30));
        assertEquals('FizzBuzz', $this->converter->convert(60));
    }
}
