<?php


namespace Tests\StravaObjects\Collections;

use StravaObjects\Collections\Collection;
use StravaObjects\Collections\CommentCollection;
use StravaObjects\Objects\Comment;
use Tests\StravaObjects\Objects\TestCase;

class CommentCollectionTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/CommentCollection.json'), true);
        $instance = Collection::create($parameters, CommentCollection::class);

        $this->assertInstanceOf(CommentCollection::class, $instance);
        $this->assertContainsOnlyInstancesOf(Comment::class, $instance->getIterator());
    }
}
