<?php


namespace Tests\StravaObjects\Collections;

use StravaObjects\Collections\Collection;
use StravaObjects\Collections\SummaryAthleteCollection;
use StravaObjects\Objects\SummaryAthlete;
use Tests\StravaObjects\Objects\TestCase;

class SummaryAthleteCollectionTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/SummaryAthleteCollection.json'), true);
        $instance = Collection::create($parameters, SummaryAthleteCollection::class);

        $this->assertInstanceOf(SummaryAthleteCollection::class, $instance);
        $this->assertContainsOnlyInstancesOf(SummaryAthlete::class, $instance->getIterator());
    }
}
