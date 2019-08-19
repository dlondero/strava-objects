<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\ExplorerSegment;

class ExplorerSegmentTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/ExplorerSegment.json'), true);
        $instance = ExplorerSegment::create($parameters);

        $this->assertInstanceOf(ExplorerSegment::class, $instance);
    }
}
