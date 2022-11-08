<?php

declare(strict_types=1);

namespace Tests;

use Generator;
use PHPUnit\Framework\TestCase;
use KH007\Services\ConvertFizzBuzz;

use function PHPUnit\Framework\assertEquals;

class ConvertorTest extends TestCase
{
    protected ConvertFizzBuzz $converter;
    /**
    * @dataProvider dataProvider
    */
    public function testConverter(int $input, int|string $expected): void
    {
        $this->converter = new ConvertFizzBuzz();
        assertEquals($expected, $this->converter->convert($input));
    }

    public function dataProvider(): Generator
    {
        yield 'ConverterDosentChangeNormalNumbers' => [1, 1];
        yield 'ConverterDoesChangeNumbersMultiplyBy3' => [3, 'Fizz'];
        yield 'ConverterDoesChangeNumbersMultiplyBy5' => [5, 'Buzz'];
        yield 'ConverterDoesChangeNumbersMultiplyBy3and5' => [15, 'FizzBuzz'];
    }
}
