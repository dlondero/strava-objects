<?php


namespace Tests\StravaObjects\Collections;

use StravaObjects\Collections\ActivityZoneCollection;
use StravaObjects\Collections\Collection;
use StravaObjects\Objects\ActivityZone;
use Tests\StravaObjects\Objects\TestCase;

class ActivityZonesCollectionTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/ActivityZonesCollection.json'), true);
        $instance = Collection::create($parameters, ActivityZoneCollection::class);

        $this->assertInstanceOf(ActivityZoneCollection::class, $instance);
        $this->assertContainsOnlyInstancesOf(ActivityZone::class, $instance->getIterator());
    }
}
