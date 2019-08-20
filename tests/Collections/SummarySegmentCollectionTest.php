<?php


namespace Tests\StravaObjects\Collections;

use StravaObjects\Collections\Collection;
use StravaObjects\Collections\SummarySegmentCollection;
use StravaObjects\Objects\SummarySegment;
use Tests\StravaObjects\Objects\TestCase;

class SummarySegmentCollectionTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/SummarySegmentCollection.json'), true);
        $instance = Collection::create($parameters, SummarySegmentCollection::class);

        $this->assertInstanceOf(SummarySegmentCollection::class, $instance);
        $this->assertContainsOnlyInstancesOf(SummarySegment::class, $instance->getIterator());
    }
}
