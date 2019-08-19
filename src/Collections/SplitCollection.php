<?php declare(strict_types=1);

namespace StravaObjects\Collections;

use StravaObjects\Objects\Split;

class SplitCollection extends Collection
{
    public function getType(): string
    {
        return Split::class;
    }
}
