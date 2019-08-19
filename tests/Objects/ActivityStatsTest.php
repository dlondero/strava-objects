<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\ActivityStats;

class ActivityStatsTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/ActivityStats.json'), true);
        $instance = ActivityStats::create($parameters);

        $this->assertInstanceOf(ActivityStats::class, $instance);
    }
}
