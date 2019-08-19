<?php declare(strict_types=1);

namespace StravaObjects\Collections;

use StravaObjects\Objects\RunningRace;

class RunningRaceCollection extends Collection
{
    public function getType(): string
    {
        return RunningRace::class;
    }
}
