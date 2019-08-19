<?php declare(strict_types=1);

namespace StravaObjects\Objects;

use DateTimeImmutable;
use StravaObjects\Util\StravaDateTimeImmutable;

class SummarySegmentEffort
{
    private int $id;
    private int $elapsedTime;
    private DateTimeImmutable $startDate;
    private DateTimeImmutable $startDateLocal;
    private float $distance;
    private bool $isKom;

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
        $instance->isKom = (bool)$parameters['is_kom'];

        return $instance;
    }
}
