<?php

declare(strict_types=1);

namespace Tests;

use Generator;
use PHPUnit\Framework\TestCase;
use KH007\Services\ConvertFizzBuzz;

use function PHPUnit\Framework\assertEquals;

class DataProviderConvertorTest extends TestCase
{
    /**
    * @dataProvider numberProvider
    */
    public function testConverterDosentChangeNormalNumbers(int $number, string|int $expected): void
    {
        $converter = new ConvertFizzBuzz();
        $actual = $converter->convert($number);
        assertEquals($expected, $actual);
    }
    public function numberProvider(): Generator
    {
        yield 'only1s' => [1,1];
        yield 'only2s' => [2,2];
        yield 'only4s' => [4,4];
    }
}
