<?php

declare(strict_types=1);

namespace KH007\Services;

class ConvertFizzBuzz
{
    public function convert(int $number): int|string
    {
        if ($number % 3 === 0 && $number % 5 === 0) {
            return 'FizzBuzz';
        } elseif ($number % 3 === 0) {
            return 'Fizz';
        } elseif ($number % 5 === 0) {
            return 'Buzz';
        } else {
            return $number;
        }
    }
}
