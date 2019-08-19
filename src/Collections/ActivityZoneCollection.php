<?php declare(strict_types=1);

namespace StravaObjects\Collections;

use StravaObjects\Objects\ActivityZone;

class ActivityZoneCollection extends Collection
{
    public function getType(): string
    {
        return ActivityZone::class;
    }
}
