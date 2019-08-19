<?php declare(strict_types=1);

namespace StravaObjects\Collections;

use StravaObjects\Objects\SummaryClub;

class SummaryClubCollection extends Collection
{
    public function getType(): string
    {
        return SummaryClub::class;
    }
}
