<?php


namespace Tests\StravaObjects\Collections;

use StravaObjects\Collections\Collection;
use StravaObjects\Collections\RouteDirectionCollection;
use StravaObjects\Objects\RouteDirection;
use Tests\StravaObjects\Objects\TestCase;

class RouteDirectionCollectionTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/RouteDirectionCollection.json'), true);
        $instance = Collection::create($parameters, RouteDirectionCollection::class);

        $this->assertInstanceOf(RouteDirectionCollection::class, $instance);
        $this->assertContainsOnlyInstancesOf(RouteDirection::class, $instance->getIterator());
    }
}
