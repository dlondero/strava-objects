<?php declare(strict_types=1);

namespace StravaObjects\Objects;

class SummarySegment
{
    private int $id;
    private string $name;
    private string $activityType;
    private float $distance;
    private float $averageGrade;
    private float $maximumGrade;
    private float $elevationHigh;
    private float $elevationLow;
    private ?LatLng $startLatLng;
    private ?LatLng $endLatLng;
    private float $startLatitude;
    private float $startLongitude;
    private float $endLatitude;
    private float $endLongitude;
    private int $climbCategory;
    private string $city;
    private string $state;
    private string $country;
    private bool $private;
    private bool $hazardous;
    private bool $starred;
    private ?SummarySegmentEffort $athletePrEffort;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->id = (int)$parameters['id'];
        $instance->name = (string)$parameters['name'];
        $instance->activityType = (string)$parameters['activity_type'];
        $instance->distance = (float)$parameters['distance'];
        $instance->averageGrade = (float)$parameters['average_grade'];
        $instance->maximumGrade = (float)$parameters['maximum_grade'];
        $instance->elevationHigh = (float)$parameters['elevation_high'];
        $instance->elevationLow = (float)$parameters['elevation_low'];
        $instance->startLatLng = is_array($parameters['start_latlng']) ? LatLng::create($parameters['start_latlng']) : null;
        $instance->endLatLng = is_array($parameters['end_latlng']) ? LatLng::create($parameters['end_latlng']) : null;
        $instance->startLatitude = (float)$parameters['start_latitude'];
        $instance->startLongitude = (float)$parameters['start_longitude'];
        $instance->endLatitude = (float)$parameters['end_latitude'];
        $instance->endLongitude = (float)$parameters['end_longitude'];
        $instance->climbCategory = (int)$parameters['climb_category'];
        $instance->city = (string)$parameters['city'];
        $instance->state = (string)$parameters['state'];
        $instance->country = (string)$parameters['country'];
        $instance->private = (bool)$parameters['private'];
        $instance->hazardous = (bool)$parameters['hazardous'];
        $instance->starred = (bool)$parameters['starred'];
        $instance->athletePrEffort = is_array($parameters['athlete_pr_effort']) ? SummarySegmentEffort::create($parameters['athlete_pr_effort']) : null;

        return $instance;
    }
}
