<?php declare(strict_types=1);

namespace StravaObjects\Objects;

use StravaObjects\Collections\Collection;
use StravaObjects\Collections\RouteDirectionCollection;
use StravaObjects\Collections\SummarySegmentCollection;

class Route
{
    private int $id;
    private ?SummaryAthlete $athlete;
    private string $description;
    private float $distance;
    private float $elevationGain;
    private PolylineMap $map;
    private string $name;
    private bool $private;
    private bool $starred;
    private int $type;
    private int $subType;
    private ?SummarySegmentCollection $segments;
    private ?RouteDirectionCollection $directions;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->id = (int)$parameters['id'];
        $instance->athlete = is_array($parameters['athlete']) ? SummaryAthlete::create($parameters['athlete']) : null;
        $instance->description = (string)$parameters['description'];
        $instance->distance = (float)$parameters['distance'];
        $instance->elevationGain = (float)$parameters['elevation_gain'];
        $instance->map = PolylineMap::create($parameters['map']);
        $instance->name = (string)$parameters['name'];
        $instance->private = (bool)$parameters['private'];
        $instance->starred = (bool)$parameters['starred'];
        $instance->type = (int)$parameters['type'];
        $instance->subType = (int)$parameters['sub_type'];
        $instance->segments = isset($parameters['segments']) ? Collection::create($parameters['segments'], SummarySegmentCollection::class) : null;
        $instance->directions = isset($parameters['directions']) ? Collection::create($parameters['directions'], RouteDirectionCollection::class) : null;

        return $instance;
    }
}
