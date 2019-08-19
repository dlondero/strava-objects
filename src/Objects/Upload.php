<?php declare(strict_types=1);

namespace StravaObjects\Objects;

class Upload
{
    private int $id;
    private string $idString;
    private string $externalId;
    private string $error;
    private string $status;
    private int $activityId;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->id = (int)$parameters['id'];
        $instance->idString = (string)$parameters['id_str'];
        $instance->externalId = (string)$parameters['external_id'];
        $instance->error = (string)$parameters['error'];
        $instance->status = (string)$parameters['status'];
        $instance->activityId = (int)$parameters['activity_id'];

        return $instance;
    }
}
