<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\SegmentLeaderboardEntry;

class SegmentLeaderboardEntryTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/SegmentLeaderboardEntry.json'), true);
        $instance = SegmentLeaderboardEntry::create($parameters);

        $this->assertInstanceOf(SegmentLeaderboardEntry::class, $instance);
    }
}
