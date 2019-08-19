<?php declare(strict_types=1);

namespace StravaObjects\Collections;

use StravaObjects\Objects\ZoneRange;

class ZoneRangeCollection extends Collection
{
    public function getType(): string
    {
        return ZoneRange::class;
    }
}
