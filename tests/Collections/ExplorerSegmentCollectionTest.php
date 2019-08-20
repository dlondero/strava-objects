<?php


namespace Tests\StravaObjects\Collections;

use StravaObjects\Collections\Collection;
use StravaObjects\Collections\ExplorerSegmentCollection;
use StravaObjects\Objects\ExplorerSegment;
use Tests\StravaObjects\Objects\TestCase;

class ExplorerSegmentCollectionTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/ExplorerSegmentCollection.json'), true);
        $instance = Collection::create($parameters, ExplorerSegmentCollection::class);

        $this->assertInstanceOf(ExplorerSegmentCollection::class, $instance);
        $this->assertContainsOnlyInstancesOf(ExplorerSegment::class, $instance->getIterator());
    }
}
