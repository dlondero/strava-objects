<?php declare(strict_types=1);

namespace StravaObjects\Collections;

use StravaObjects\Objects\SegmentLeaderboardEntry;

class SegmentLeaderboardEntryCollection extends Collection
{
    public function getType(): string
    {
        return SegmentLeaderboardEntry::class;
    }
}
