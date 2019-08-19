<?php declare(strict_types=1);

namespace StravaObjects\Objects;

class RouteDirection
{
    private float $distance;
    private int $action;
    private string $name;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->distance = (float)$parameters['distance'];
        $instance->action = (int)$parameters['action'];
        $instance->name = (string)$parameters['name'];

        return $instance;
    }
}
