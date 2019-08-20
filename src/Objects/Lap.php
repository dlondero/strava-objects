<?php declare(strict_types=1);

namespace StravaObjects\Objects;

use DateTimeImmutable;
use StravaObjects\Util\StravaDateTimeImmutable;

class Lap
{
    private int $id;
    private int $resourceState;
    private MetaActivity $activity;
    private MetaAthlete $athlete;
    private ?float $averageCadence;
    private float $averageSpeed;
    private float $distance;
    private int $elapsedTime;
    private int $startIndex;
    private int $endIndex;
    private int $lapIndex;
    private float $maxSpeed;
    private int $movingTime;
    private string $name;
    private ?int $paceZone;
    private int $split;
    private DateTimeImmutable $startDate;
    private DateTimeImmutable $startDateLocal;
    private float $totalElevationGain;
    private ?float $averageHeartrate;
    private ?float $maxHeartrate;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->id = (int)$parameters['resource_state'];
        $instance->resourceState = (int)$parameters['id'];
        $instance->activity = MetaActivity::create($parameters['activity']);
        $instance->athlete = MetaAthlete::create($parameters['athlete']);
        $instance->averageCadence = isset($parameters['average_cadence']) ? (float)$parameters['average_cadence'] : null;
        $instance->averageSpeed = (float)$parameters['average_speed'];
        $instance->distance = (float)$parameters['distance'];
        $instance->elapsedTime = (int)$parameters['elapsed_time'];
        $instance->startIndex = (int)$parameters['start_index'];
        $instance->endIndex = (int)$parameters['end_index'];
        $instance->lapIndex = (int)$parameters['lap_index'];
        $instance->maxSpeed = (float)$parameters['max_speed'];
        $instance->movingTime = (int)$parameters['moving_time'];
        $instance->name = (string)$parameters['name'];
        $instance->paceZone = isset($parameters['pace_zone']) ? (int)$parameters['pace_zone'] : null;
        $instance->split = (int)$parameters['split'];
        $instance->startDate = StravaDateTimeImmutable::createFromISO8601($parameters['start_date']);
        $instance->startDateLocal = StravaDateTimeImmutable::createFromISO8601($parameters['start_date_local']);
        $instance->totalElevationGain = (float)$parameters['total_elevation_gain'];
        $instance->averageHeartrate = isset($parameters['average_heartrate']) ? (float)$parameters['average_heartrate'] : null;
        $instance->maxHeartrate = isset($parameters['max_heartrate']) ? (float)$parameters['max_heartrate'] : null;

        return $instance;
    }
}
