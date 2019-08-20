<?php


namespace Tests\StravaObjects\Collections;

use StravaObjects\Collections\Collection;
use StravaObjects\Collections\SegmentLeaderboardEntryCollection;
use StravaObjects\Objects\SegmentLeaderboardEntry;
use Tests\StravaObjects\Objects\TestCase;

class SegmentLeaderboardEntryCollectionTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/SegmentLeaderboardEntryCollection.json'), true);
        $instance = Collection::create($parameters, SegmentLeaderboardEntryCollection::class);

        $this->assertInstanceOf(SegmentLeaderboardEntryCollection::class, $instance);
        $this->assertContainsOnlyInstancesOf(SegmentLeaderboardEntry::class, $instance->getIterator());
    }
}
