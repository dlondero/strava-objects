<?php declare(strict_types=1);

namespace StravaObjects\Objects;

class ZoneRange
{
    private int $min;
    private int $max;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->min = (int)$parameters['min'];
        $instance->max = (int)$parameters['max'];

        return $instance;
    }
}
