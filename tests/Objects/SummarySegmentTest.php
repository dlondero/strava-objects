<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\SummarySegment;

class SummarySegmentTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/SummarySegment.json'), true);
        $instance = SummarySegment::create($parameters);

        $this->assertInstanceOf(SummarySegment::class, $instance);
    }
}
