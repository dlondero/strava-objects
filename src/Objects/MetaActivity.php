<?php declare(strict_types=1);

namespace StravaObjects\Objects;

class MetaActivity
{
    private int $id;
    private int $resourceState;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->id = (int)$parameters['id'];
        $instance->resourceState = (int)$parameters['resource_state'];

        return $instance;
    }
}
