<?php declare(strict_types=1);

namespace StravaObjects\Objects;

class ActivityTotal
{
    private int $count;
    private float $distance;
    private int $movingTime;
    private int $elapsedTime;
    private float $elevationGain;
    private ?int $achievementCount;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->count = (int)$parameters['count'];
        $instance->distance = (float)$parameters['distance'];
        $instance->movingTime = (int)$parameters['moving_time'];
        $instance->elapsedTime = (int)$parameters['elapsed_time'];
        $instance->elevationGain = (float)$parameters['elevation_gain'];
        $instance->achievementCount = isset($parameters['achievement_count']) ? (int)$parameters['achievement_count'] : null;

        return $instance;
    }
}
