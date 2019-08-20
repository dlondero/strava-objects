<?php declare(strict_types=1);

namespace StravaObjects\Objects;

use DateTimeImmutable;
use StravaObjects\Util\StravaDateTimeImmutable;

class DetailedSegmentEffort
{
    private int $id;
    private int $elapsedTime;
    private DateTimeImmutable $startDate;
    private DateTimeImmutable $startDateLocal;
    private float $distance;
    private bool $isKom;
    private string $name;
    private MetaActivity $activity;
    private MetaAthlete $athlete;
    private int $movingTime;
    private int $startIndex;
    private int $endIndex;
    private ?float $averageCadence;
    private ?float $averageWatts;
    private ?bool $deviceWatts;
    private ?float $averageHeartrate;
    private ?float $maxHeartrate;
    private SummarySegment $segment;
    private ?int $komRank;
    private ?int $prRank;
    private ?bool $hidden;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->id = (int)$parameters['id'];
        $instance->elapsedTime = (int)$parameters['elapsed_time'];
        $instance->startDate = StravaDateTimeImmutable::createFromISO8601($parameters['start_date']);
        $instance->startDateLocal = StravaDateTimeImmutable::createFromISO8601($parameters['start_date_local']);
        $instance->distance = (float)$parameters['distance'];
        $instance->isKom = isset($parameters['is_kom']) ? (bool)$parameters['is_kom'] : false;
        $instance->name = (string)$parameters['name'];
        $instance->activity = MetaActivity::create($parameters['activity']);
        $instance->athlete = MetaAthlete::create($parameters['athlete']);
        $instance->movingTime = (int)$parameters['moving_time'];
        $instance->startIndex = (int)$parameters['start_index'];
        $instance->endIndex = (int)$parameters['end_index'];
        $instance->averageCadence = isset($parameters['average_cadence']) ? (float)$parameters['average_cadence'] : null;
        $instance->averageWatts = isset($parameters['average_watts']) ? (float)$parameters['average_watts'] : null;
        $instance->deviceWatts = isset($parameters['device_watts']) ? (bool)$parameters['device_watts'] : null;
        $instance->averageHeartrate = isset($parameters['average_heartrate']) ? (float)$parameters['average_heartrate'] : null;
        $instance->maxHeartrate = isset($parameters['max_heartrate']) ? (float)$parameters['max_heartrate'] : null;
        $instance->segment = SummarySegment::create($parameters['segment']);
        $instance->komRank = isset($parameters['kom_rank']) ? (int)$parameters['kom_rank'] : null;
        $instance->prRank = isset($parameters['pr_rank']) ? (int)$parameters['pr_rank'] : null;
        $instance->hidden = isset($parameters['hidden']) ? (bool)$parameters['hidden'] : null;

        return $instance;
    }
}
