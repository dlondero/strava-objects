<?php

namespace StravaObjects\Objects;

use StravaObjects\Collections\Collection;
use StravaObjects\Collections\ZoneRangeCollection;

class HeartRateZoneRanges
{
    private bool $customZones;
    private ZoneRangeCollection $zones;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->customZones = (bool)$parameters['custom_zones'];
        $instance->zones = Collection::create($parameters['zones'], ZoneRangeCollection::class);

        return $instance;
    }
}
