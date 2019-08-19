<?php declare(strict_types=1);

namespace StravaObjects\Objects;

class SummaryGear
{
    private string $id;
    private int $resourceState;
    private bool $primary;
    private string $name;
    private float $distance;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->id = (string)$parameters['id'];
        $instance->resourceState = (int)$parameters['resource_state'];
        $instance->primary = (bool)$parameters['primary'];
        $instance->name = (string)$parameters['name'];
        $instance->distance = (float) $parameters['distance'];

        return $instance;
    }
}
