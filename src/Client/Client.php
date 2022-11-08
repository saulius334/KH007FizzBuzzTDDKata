<?php

declare(strict_types=1);

namespace KH007\Client;

use KH007\Services\ConvertFizzBuzz;

class Client
{
    protected ConvertFizzBuzz $converter;
    public function __construct()
    {
        $this->converter = new ConvertFizzBuzz();
    }
    public function listMeFizzBuzz(int $number): void
    {
        for ($i = 1; $i <= $number; $i++) {
            print_r($this->converter->convert($i) . "\n");
        }
    }
    public function listMeFizzBuzz2(int $number): void
    {
        for ($i = 1; $i <= $number; $i++) {
            print_r($this->converter->convertStage2($i) . "\n");
        }
    }
}
