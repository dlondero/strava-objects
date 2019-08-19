<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\DetailedSegmentEffort;

class DetailedSegmentEffortTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/DetailedSegmentEffort.json'), true);
        $instance = DetailedSegmentEffort::create($parameters);

        $this->assertInstanceOf(DetailedSegmentEffort::class, $instance);
    }
}
