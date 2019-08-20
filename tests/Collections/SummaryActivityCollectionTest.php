<?php


namespace Tests\StravaObjects\Collections;

use StravaObjects\Collections\Collection;
use StravaObjects\Collections\SummaryActivityCollection;
use StravaObjects\Objects\SummaryActivity;
use Tests\StravaObjects\Objects\TestCase;

class SummaryActivityCollectionTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/SummaryActivityCollection.json'), true);
        $instance = Collection::create($parameters, SummaryActivityCollection::class);

        $this->assertInstanceOf(SummaryActivityCollection::class, $instance);
        $this->assertContainsOnlyInstancesOf(SummaryActivity::class, $instance->getIterator());
    }
}
