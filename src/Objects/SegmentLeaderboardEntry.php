<?php declare(strict_types=1);

namespace StravaObjects\Objects;

use DateTimeImmutable;
use StravaObjects\Util\StravaDateTimeImmutable;

class SegmentLeaderboardEntry
{
    private string $athleteName;
    private int $elapsedTime;
    private int $movingTime;
    private DateTimeImmutable $startDate;
    private DateTimeImmutable $startDateLocal;
    private int $rank;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->athleteName = (string)$parameters['athlete_name'];
        $instance->elapsedTime = (int)$parameters['elapsed_time'];
        $instance->movingTime = (int)$parameters['elapsed_time'];
        $instance->startDate = StravaDateTimeImmutable::createFromISO8601($parameters['start_date']);
        $instance->startDateLocal = StravaDateTimeImmutable::createFromISO8601($parameters['start_date_local']);
        $instance->rank = (int)$parameters['rank'];

        return $instance;
    }
}
