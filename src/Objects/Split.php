<?php declare(strict_types=1);

namespace StravaObjects\Objects;

class Split
{
    private float $averageSpeed;
    private float $distance;
    private int $elapsedTime;
    private float $elevationDifference;
    private int $paceZone;
    private int $movingTime;
    private int $split;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->averageSpeed = (float)$parameters['average_speed'];
        $instance->distance = (float)$parameters['distance'];
        $instance->elapsedTime = (int)$parameters['elapsed_time'];
        $instance->elevationDifference = (float)$parameters['elevation_difference'];
        $instance->paceZone = (int)$parameters['pace_zone'];
        $instance->movingTime = (int)$parameters['moving_time'];
        $instance->split = (int)$parameters['split'];

        return $instance;
    }
}
