<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\SegmentLeaderboard;

class SegmentLeaderboardTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/SegmentLeaderboard.json'), true);
        $instance = SegmentLeaderboard::create($parameters);

        $this->assertInstanceOf(SegmentLeaderboard::class, $instance);
    }
}
