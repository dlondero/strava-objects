<?php


namespace Tests\StravaObjects\Collections;

use StravaObjects\Collections\Collection;
use StravaObjects\Collections\LapCollection;
use StravaObjects\Objects\Lap;
use Tests\StravaObjects\Objects\TestCase;

class LapCollectionTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/LapCollection.json'), true);
        $instance = Collection::create($parameters, LapCollection::class);

        $this->assertInstanceOf(LapCollection::class, $instance);
        $this->assertContainsOnlyInstancesOf(Lap::class, $instance->getIterator());
    }
}
