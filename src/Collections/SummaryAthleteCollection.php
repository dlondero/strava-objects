<?php declare(strict_types=1);

namespace StravaObjects\Collections;

use StravaObjects\Objects\SummaryAthlete;

class SummaryAthleteCollection extends Collection
{
    public function getType(): string
    {
        return SummaryAthlete::class;
    }
}
