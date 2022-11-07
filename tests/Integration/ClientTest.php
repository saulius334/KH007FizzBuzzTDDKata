<?php

declare(strict_types=1);

namespace Tests;

use KH007\Client\Client;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class ClientTest extends TestCase
{
    protected Client $client;
    protected function setUp(): void
    {
        $this->client = new Client();
    }
    public function test(): void
    {
        assertEquals(true, true);
    }
}
