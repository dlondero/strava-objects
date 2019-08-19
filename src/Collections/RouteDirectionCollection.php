<?php declare(strict_types=1);

namespace StravaObjects\Collections;

use StravaObjects\Objects\RouteDirection;

class RouteDirectionCollection extends Collection
{
    public function getType(): string
    {
        return RouteDirection::class;
    }
}
