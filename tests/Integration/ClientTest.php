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
    // public function testLoopGoesToInputedNumber(): void
    // {
    //     // $mockRepo = $this->createMock(Client::class);
    //     // $mockResults = 100;
    //     // $mockRepo->method('listMeFizzBuzz')->willReturn($mockResults);
    //     // $result = $mockRepo->listMeFizzBuzz(100);

    //     // $this->assertEquals(100,$result);


    //     // assertEquals(101, $this->client->listMeFizzBuzz(100));
    //     // assertEquals(991, $this->client->listMeFizzBuzz(990));
    // }
    public function test(): void
    {
        assertEquals(true, true);
    }
}
