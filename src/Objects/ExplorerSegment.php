<?php declare(strict_types=1);

namespace StravaObjects\Objects;

class ExplorerSegment
{
    private int $id;
    private string $name;
    private int $climbCategory;
    private string $climbCategoryDesc;
    private float $averageGrade;
    private LatLng $startLatLng;
    private LatLng $endLatLng;
    private float $elevationDifference;
    private float $distance;
    private string $points;
    private bool $starred;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->id = (int)$parameters['id'];
        $instance->name = (string)$parameters['name'];
        $instance->climbCategory = (int)$parameters['climb_category'];
        $instance->climbCategoryDesc = (string)$parameters['climb_category_desc'];
        $instance->averageGrade = (float)$parameters['avg_grade'];
        $instance->startLatLng = LatLng::create($parameters['start_latlng']);
        $instance->endLatLng = LatLng::create($parameters['end_latlng']);
        $instance->elevationDifference = (float)$parameters['elev_difference'];
        $instance->distance = (float)$parameters['distance'];
        $instance->points = (string)$parameters['points'];
        $instance->starred = (bool)$parameters['starred'];

        return $instance;
    }
}
