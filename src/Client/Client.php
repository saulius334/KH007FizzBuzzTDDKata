<?php

declare(strict_types=1);

namespace KH007\Client;

use KH007\Services\ConvertFizzBuzz;

class Client
{
    public function listMeFizzBuzz(int $number): int
    {
        $converter = new ConvertFizzBuzz();
        for ($i = 1; $i <= $number; $i++) {
            print_r($converter->convert($i) . "\n");
        }
        return $i;
    }
    public function listMeFizzBuzz2(int $number): int
    {
        $converter = new ConvertFizzBuzz();
        for ($i = 1; $i <= $number; $i++) {
            print_r($converter->convertStage2($i) . "\n");
        }
        return $i;
    }
}
