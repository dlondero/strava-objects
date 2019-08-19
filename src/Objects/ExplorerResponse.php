<?php declare(strict_types=1);

namespace StravaObjects\Objects;

use StravaObjects\Collections\Collection;
use StravaObjects\Collections\ExplorerSegmentCollection;

class ExplorerResponse
{
    private ExplorerSegmentCollection $segments;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->segments = Collection::create($parameters['segments'], ExplorerSegmentCollection::class);

        return $instance;
    }
}
