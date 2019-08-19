<?php declare(strict_types=1);

namespace StravaObjects\Collections;

use StravaObjects\Objects\Error;

class ErrorCollection extends Collection
{
    public function getType(): string
    {
        return Error::class;
    }
}
