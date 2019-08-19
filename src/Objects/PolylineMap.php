<?php declare(strict_types=1);

namespace StravaObjects\Objects;

class PolylineMap
{
    private string $id;
    private ?string $polyline;
    private ?string $summaryPolyline;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->id = (string)$parameters['id'];
        $instance->polyline = isset($parameters['polyline']) ? (string)$parameters['polyline'] : null;
        $instance->summaryPolyline = isset($parameters['summaryPolyline']) ? (string)$parameters['summaryPolyline'] : null;

        return $instance;
    }
}
