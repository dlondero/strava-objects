<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\Comment;

class CommentTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/Comment.json'), true);
        $instance = Comment::create($parameters);

        $this->assertInstanceOf(Comment::class, $instance);
    }
}
