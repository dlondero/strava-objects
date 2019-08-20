<?php


namespace Tests\StravaObjects\Collections;

use StravaObjects\Collections\Collection;
use StravaObjects\Collections\ZoneRangeCollection;
use StravaObjects\Objects\ZoneRange;
use Tests\StravaObjects\Objects\TestCase;

class ZoneRangeCollectionTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/ZoneRangeCollection.json'), true);
        $instance = Collection::create($parameters, ZoneRangeCollection::class);

        $this->assertInstanceOf(ZoneRangeCollection::class, $instance);
        $this->assertContainsOnlyInstancesOf(ZoneRange::class, $instance->getIterator());
    }
}
