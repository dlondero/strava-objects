<?php declare(strict_types=1);

namespace StravaObjects\Collections;

use StravaObjects\Objects\Lap;

class LapCollection extends Collection
{
    public function getType(): string
    {
        return Lap::class;
    }
}
