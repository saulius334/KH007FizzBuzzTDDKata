<?php

declare(strict_types=1);

namespace KH007\Services;

class ConvertFizzBuzz
{
    public function __construct()
    {
        $this->checker = new NumberChecker();
    }
    public function convert(int $number): int|string
    {
        if ($number % 15 === 0) {
            return 'FizzBuzz';
        } elseif ($number % 3 === 0 || $this->checker->check($number) === 3) {
            return 'Fizz';
        } elseif ($number % 5 === 0 || $this->checker->check($number) === 5) {
            return 'Buzz';
        } else {
            return $number;
        }
    }
}
