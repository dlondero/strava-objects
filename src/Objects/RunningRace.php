<?php declare(strict_types=1);

namespace StravaObjects\Objects;

use DateTimeImmutable;
use StravaObjects\Util\StravaDateTimeImmutable;

class RunningRace
{
    private int $id;
    private string $name;
    private int $runningRaceType;
    private float $distance;
    private DateTimeImmutable $startDateLocal;
    private string $city;
    private string $state;
    private string $country;
    private ?array $routeIds;
    private string $measurementPreference;
    private string $url;
    private ?string $websiteUrl;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->id = (int)$parameters['id'];
        $instance->name = (string)$parameters['name'];
        $instance->runningRaceType = (int)$parameters['running_race_type'];
        $instance->distance = (float)$parameters['distance'];
        $instance->startDateLocal = StravaDateTimeImmutable::createFromISO8601($parameters['start_date_local']);
        $instance->city = (string)$parameters['city'];
        $instance->state = (string)$parameters['state'];
        $instance->country = (string)$parameters['country'];
        $instance->routeIds = isset($parameters['route_ids']) ? (array)$parameters['route_ids'] : null;
        $instance->measurementPreference = (string)$parameters['measurement_preference'];
        $instance->url = (string)$parameters['url'];
        $instance->websiteUrl = isset($parameters['website_url']) ? (string)$parameters['website_url'] : null;

        return $instance;
    }
}
