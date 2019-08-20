<?php


namespace Tests\StravaObjects\Collections;

use StravaObjects\Collections\Collection;
use StravaObjects\Collections\RunningRaceCollection;
use StravaObjects\Objects\RunningRace;
use Tests\StravaObjects\Objects\TestCase;

class RunningRaceCollectionTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/RunningRaceCollection.json'), true);
        $instance = Collection::create($parameters, RunningRaceCollection::class);

        $this->assertInstanceOf(RunningRaceCollection::class, $instance);
        $this->assertContainsOnlyInstancesOf(RunningRace::class, $instance->getIterator());
    }
}
