<?php

declare(strict_types=1);

namespace Tests;

use Generator;
use PHPUnit\Framework\TestCase;
use KH007\Services\ConvertFizzBuzz;

use function PHPUnit\Framework\assertEquals;

class ConvertorStage2Test extends TestCase
{
    protected ConvertFizzBuzz $converter;
    /**
    * @dataProvider dataProvider
    */
    public function testStage2Converter(int $input, int|string $expected): void
    {
        $this->converter = new ConvertFizzBuzz();
        assertEquals($expected, $this->converter->convertStage2($input));
    }

    public function dataProvider(): Generator
    {
        yield 'ConverterStage2ReturnsEmptyStringOnNormalNumbers' => [4, 4];
        yield 'ConverterStage2DoesChangeNumbersMultiplyBy3' => [3, 'FizzFizz'];
        yield 'ConverterStage2DoesChangeNumbersMultiplyBy5' => [5, 'BuzzBuzz'];
        yield 'ConverterStage2DoesChangeNumbersMultiplyBy3and5' => [15, 'BuzzFizzBuzz'];
        yield 'ConverterStage2DoesChangeNumbersMultiplyBy3and5#2' => [35, 'FizzBuzzBuzz'];
    }
}
