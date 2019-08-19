<?php declare(strict_types=1);

namespace StravaObjects\Objects;

class PolylineMap
{
    private string $id;
    private string $polyline;
    private string $summaryPolyline;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->id = (string)$parameters['id'];
        $instance->polyline = (string)$parameters['polyline'];
        $instance->summaryPolyline = (string)$parameters['summaryPolyline'];

        return $instance;
    }
}
