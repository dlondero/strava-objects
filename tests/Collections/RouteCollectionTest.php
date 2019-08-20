<?php


namespace Tests\StravaObjects\Collections;

use StravaObjects\Collections\Collection;
use StravaObjects\Collections\RouteCollection;
use StravaObjects\Objects\Route;
use Tests\StravaObjects\Objects\TestCase;

class RouteCollectionTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/RouteCollection.json'), true);
        $instance = Collection::create($parameters, RouteCollection::class);

        $this->assertInstanceOf(RouteCollection::class, $instance);
        $this->assertContainsOnlyInstancesOf(Route::class, $instance->getIterator());
    }
}
