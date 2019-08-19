<?php declare(strict_types=1);

namespace StravaObjects\Collections;

use StravaObjects\Objects\SummaryGear;

class SummaryGearCollection extends Collection
{
    public function getType(): string
    {
        return SummaryGear::class;
    }
}
