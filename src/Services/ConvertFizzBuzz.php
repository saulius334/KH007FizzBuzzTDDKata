<?php

declare(strict_types=1);

namespace KH007\Services;

class ConvertFizzBuzz
{
    protected NumberChecker $checker;
    public function __construct()
    {
        $this->checker = new NumberChecker();
    }
    public function convert(int $number): int|string
    {
        if ($number % 15 === 0) {
            return 'FizzBuzz';
        } elseif ($number % 3 === 0) {
            return 'Fizz';
        } elseif ($number % 5 === 0) {
            return 'Buzz';
        } else {
            return $number;
        }
    }
    public function convertStage2(int $number): int|string
    {
        // $result1 = $this->checker->check($number);
        // $result2 = $this->convert($number);
        // return $result1 . $result2;
           $result1 = $this->convert($number);
           $result2 = $this->checker->check($number);
        if (is_int($result1)) {
            return $result2;
        } else {
            return $result2 . $result1;
        }
    }
}
