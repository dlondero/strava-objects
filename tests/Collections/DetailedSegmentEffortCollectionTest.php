<?php


namespace Tests\StravaObjects\Collections;

use StravaObjects\Collections\Collection;
use StravaObjects\Collections\DetailedSegmentEffortCollection;
use StravaObjects\Objects\DetailedSegmentEffort;
use Tests\StravaObjects\Objects\TestCase;

class DetailedSegmentEffortCollectionTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/DetailedSegmentEffortCollection.json'),
            true);
        $instance = Collection::create($parameters, DetailedSegmentEffortCollection::class);

        $this->assertInstanceOf(DetailedSegmentEffortCollection::class, $instance);
        $this->assertContainsOnlyInstancesOf(DetailedSegmentEffort::class, $instance->getIterator());
    }
}
