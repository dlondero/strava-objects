<?php declare(strict_types=1);

namespace StravaObjects\Objects;

class TimedZoneRange
{
    private int $min;
    private int $max;
    private int $time;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->min = (int)$parameters['min'];
        $instance->max = (int)$parameters['max'];
        $instance->time = (int)$parameters['time'];

        return $instance;
    }
}
