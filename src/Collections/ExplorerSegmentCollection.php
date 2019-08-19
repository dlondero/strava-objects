<?php declare(strict_types=1);

namespace StravaObjects\Collections;

use StravaObjects\Objects\ExplorerSegment;

class ExplorerSegmentCollection extends Collection
{
    public function getType(): string
    {
        return ExplorerSegment::class;
    }
}
