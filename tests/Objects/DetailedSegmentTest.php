<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\DetailedSegment;

class DetailedSegmentTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/DetailedSegment.json'), true);
        $instance = DetailedSegment::create($parameters);

        $this->assertInstanceOf(DetailedSegment::class, $instance);
    }
}
