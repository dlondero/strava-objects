<?php declare(strict_types=1);

namespace StravaObjects\Collections;

use StravaObjects\Objects\DetailedSegmentEffort;

class DetailedSegmentEffortCollection extends Collection
{
    public function getType(): string
    {
        return DetailedSegmentEffort::class;
    }
}
