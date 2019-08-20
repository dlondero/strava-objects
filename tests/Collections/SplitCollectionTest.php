<?php


namespace Tests\StravaObjects\Collections;

use StravaObjects\Collections\Collection;
use StravaObjects\Collections\SplitCollection;
use StravaObjects\Objects\Split;
use Tests\StravaObjects\Objects\TestCase;

class SplitCollectionTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/SplitCollection.json'), true);
        $instance = Collection::create($parameters, SplitCollection::class);

        $this->assertInstanceOf(SplitCollection::class, $instance);
        $this->assertContainsOnlyInstancesOf(Split::class, $instance->getIterator());
    }
}
