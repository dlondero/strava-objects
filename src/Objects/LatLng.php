<?php declare(strict_types=1);

namespace StravaObjects\Objects;

class LatLng
{
    private float $latitude;
    private float $longitude;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->latitude = (float)$parameters[0];
        $instance->longitude = (float)$parameters[1];

        return $instance;
    }
}
