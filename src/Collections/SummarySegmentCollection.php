<?php declare(strict_types=1);

namespace StravaObjects\Collections;

use StravaObjects\Objects\SummarySegment;

class SummarySegmentCollection extends Collection
{
    public function getType(): string
    {
        return SummarySegment::class;
    }
}
