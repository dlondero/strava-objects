<?php declare(strict_types=1);

namespace StravaObjects\Objects;

use StravaObjects\Collections\Collection;

class TimedZoneDistribution extends Collection
{
    public function getType()
    {
        return TimedZoneRange::class;
    }
}
