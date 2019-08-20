<?php declare(strict_types=1);

namespace StravaObjects\Collections;

use StravaObjects\Objects\Comment;

class CommentCollection extends Collection
{
    public function getType(): string
    {
        return Comment::class;
    }
}
