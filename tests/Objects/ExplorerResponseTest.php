<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\ExplorerResponse;

class ExplorerResponseTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/ExplorerResponse.json'), true);
        $instance = ExplorerResponse::create($parameters);

        $this->assertInstanceOf(ExplorerResponse::class, $instance);
    }
}
