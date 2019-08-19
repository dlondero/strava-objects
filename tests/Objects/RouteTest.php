<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\Route;

class RouteTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/Route.json'), true);
        $instance = Route::create($parameters);

        $this->assertInstanceOf(Route::class, $instance);
    }
}
