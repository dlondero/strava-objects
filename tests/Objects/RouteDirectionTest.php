<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\RouteDirection;

class RouteDirectionTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/RouteDirection.json'), true);
        $instance = RouteDirection::create($parameters);

        $this->assertInstanceOf(RouteDirection::class, $instance);
    }
}
