<?php declare(strict_types=1);

namespace StravaObjects\Objects;

use StravaObjects\Collections\Collection;

class ActivityZone
{
    private int $score;
    private ?TimedZoneDistribution $distributionBuckets;
    private string $type;
    private bool $sensorBased;
    private int $points;
    private bool $customZones;
    private int $max;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $isDistributionBucketsSet = is_array($parameters['distribution_buckets']);

        $instance = new self();

        $instance->score = (int)$parameters['score'];
        $instance->distributionBuckets = $isDistributionBucketsSet ? Collection::create($parameters['distribution_buckets'], TimedZoneDistribution::class) : null;
        $instance->type = (string)$parameters['type'];
        $instance->sensorBased = (bool)$parameters['sensor_based'];
        $instance->points = (int)$parameters['points'];
        $instance->customZones = (bool)$parameters['custom_zones'];
        $instance->max = (int)$parameters['max'];

        return $instance;
    }
}
