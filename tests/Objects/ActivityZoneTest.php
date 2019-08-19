<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\ActivityZone;

class ActivityZoneTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/ActivityZone.json'), true);
        $instance = ActivityZone::create($parameters);

        $this->assertInstanceOf(ActivityZone::class, $instance);
    }
}
