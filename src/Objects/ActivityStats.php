<?php declare(strict_types=1);

namespace StravaObjects\Objects;

class ActivityStats
{
    private ?float $biggestRideDistance;
    private ?float $biggestClimbElevationGain;
    private ActivityTotal $recentRideTotals;
    private ActivityTotal $recentRunTotals;
    private ActivityTotal $recentSwimTotals;
    private ActivityTotal $ytdRideTotals;
    private ActivityTotal $ytdRunTotals;
    private ActivityTotal $ytdSwimTotals;
    private ActivityTotal $allRideTotals;
    private ActivityTotal $allRunTotals;
    private ActivityTotal $allSwimTotals;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->biggestRideDistance = $parameters['biggest_ride_distance'] ? (float)$parameters['biggest_ride_distance'] : null;
        $instance->biggestClimbElevationGain = $parameters['biggest_climb_elevation_gain'] ? (float)$parameters['biggest_climb_elevation_gain'] : null;
        $instance->recentRideTotals = ActivityTotal::create($parameters['recent_ride_totals']);
        $instance->recentRunTotals = ActivityTotal::create($parameters['recent_run_totals']);
        $instance->recentSwimTotals = ActivityTotal::create($parameters['recent_swim_totals']);
        $instance->ytdRideTotals = ActivityTotal::create($parameters['ytd_ride_totals']);
        $instance->ytdRunTotals = ActivityTotal::create($parameters['ytd_run_totals']);
        $instance->ytdSwimTotals = ActivityTotal::create($parameters['ytd_swim_totals']);
        $instance->allRideTotals = ActivityTotal::create($parameters['all_ride_totals']);
        $instance->allRunTotals = ActivityTotal::create($parameters['all_run_totals']);
        $instance->allSwimTotals = ActivityTotal::create($parameters['all_swim_totals']);

        return $instance;
    }
}
