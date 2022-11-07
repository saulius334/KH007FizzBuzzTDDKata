<?php

declare(strict_types=1);

namespace KH007\Services;

class NumberChecker
{
    public function check(int $number): string
    {
        $num = str_split(strval($number));
        if (in_array(3, $num)) {
            return "Fizz";
        } elseif (in_array(5, $num)) {
            return "Buzz";
        }
        return "";
    }
}
