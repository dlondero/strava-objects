<?php declare(strict_types=1);

namespace StravaObjects\Objects;

class DetailedGear
{
    private int $id;
    private int $resourceState;
    private bool $primary;
    private ?string $name;
    private float $distance;
    private string $brandName;
    private string $modelName;
    private int $frameType;
    private string $description;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->id = (int)$parameters['id'];
        $instance->resourceState = (int)$parameters['resource_state'];
        $instance->primary = (bool)$parameters['primary'];
        $instance->name = isset($parameters['name']) ? (string)$parameters['name'] : null;
        $instance->distance = (float)$parameters['distance'];
        $instance->brandName = (string)$parameters['brand_name'];
        $instance->modelName = (string)$parameters['model_name'];
        $instance->frameType = (int)$parameters['frame_type'];
        $instance->description = (string)$parameters['description'];

        return $instance;
    }
}
