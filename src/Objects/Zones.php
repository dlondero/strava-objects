<?php declare(strict_types=1);

namespace StravaObjects\Objects;

class Zones
{
    private ?HeartRateZoneRanges $heartRate;
    private ?PowerZoneRanges $power;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->heartRate = isset($parameters['heart_rate']) ? HeartRateZoneRanges::create($parameters['heart_rate']) : null;
        $instance->power = isset($parameters['power']) ? PowerZoneRanges::create($parameters['power']) : null;

        return $instance;
    }
}
