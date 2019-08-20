<?php


namespace Tests\StravaObjects\Collections;

use StravaObjects\Collections\Collection;
use StravaObjects\Collections\ErrorCollection;
use StravaObjects\Objects\Error;
use Tests\StravaObjects\Objects\TestCase;

class ErrorCollectionTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/ErrorCollection.json'), true);
        $instance = Collection::create($parameters, ErrorCollection::class);

        $this->assertInstanceOf(ErrorCollection::class, $instance);
        $this->assertContainsOnlyInstancesOf(Error::class, $instance->getIterator());
    }
}
