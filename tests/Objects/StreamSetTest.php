<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\StreamSet;

class StreamSetTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/StreamSet.json'), true);
        $instance = StreamSet::create($parameters);

        $this->assertInstanceOf(StreamSet::class, $instance);
    }
}
