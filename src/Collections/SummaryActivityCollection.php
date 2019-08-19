<?php declare(strict_types=1);

namespace StravaObjects\Collections;

use StravaObjects\Objects\SummaryActivity;

class SummaryActivityCollection extends Collection
{
    public function getType(): string
    {
        return SummaryActivity::class;
    }
}
