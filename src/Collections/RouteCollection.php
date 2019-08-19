<?php declare(strict_types=1);

namespace StravaObjects\Collections;

use StravaObjects\Objects\Route;

class RouteCollection extends Collection
{
    public function getType(): string
    {
        return Route::class;
    }
}
