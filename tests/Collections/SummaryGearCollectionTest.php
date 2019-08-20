<?php


namespace Tests\StravaObjects\Collections;

use StravaObjects\Collections\Collection;
use StravaObjects\Collections\SummaryGearCollection;
use StravaObjects\Objects\SummaryGear;
use Tests\StravaObjects\Objects\TestCase;

class SummaryGearCollectionTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/SummaryGearCollection.json'), true);
        $instance = Collection::create($parameters, SummaryGearCollection::class);

        $this->assertInstanceOf(SummaryGearCollection::class, $instance);
        $this->assertContainsOnlyInstancesOf(SummaryGear::class, $instance->getIterator());
    }
}
