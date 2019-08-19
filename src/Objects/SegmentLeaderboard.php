<?php declare(strict_types=1);

namespace StravaObjects\Objects;

use StravaObjects\Collections\Collection;
use StravaObjects\Collections\SegmentLeaderboardEntryCollection;

class SegmentLeaderboard
{
    private int $entryCount;
    private int $effortCount;
    private string $komType;
    private SegmentLeaderboardEntryCollection $entries;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->entryCount = (int)$parameters['entry_count'];
        $instance->effortCount = (int)$parameters['effort_count'];
        $instance->komType = (string)$parameters['kom_type'];
        $instance->entries = Collection::create($parameters['entries'], SegmentLeaderboardEntryCollection::class);

        return $instance;
    }
}
