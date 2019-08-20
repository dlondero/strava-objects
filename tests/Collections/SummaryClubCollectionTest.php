<?php


namespace Tests\StravaObjects\Collections;

use StravaObjects\Collections\Collection;
use StravaObjects\Collections\SummaryClubCollection;
use StravaObjects\Objects\SummaryClub;
use Tests\StravaObjects\Objects\TestCase;

class SummaryClubCollectionTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/SummaryClubCollection.json'), true);
        $instance = Collection::create($parameters, SummaryClubCollection::class);

        $this->assertInstanceOf(SummaryClubCollection::class, $instance);
        $this->assertContainsOnlyInstancesOf(SummaryClub::class, $instance->getIterator());
    }
}
