<?php declare(strict_types=1);

namespace StravaObjects\Objects;

class Error
{
    private string $code;
    private string $field;
    private string $resource;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->code = (string)$parameters['code'];
        $instance->field = (string)$parameters['field'];
        $instance->resource = (string)$parameters['resource'];

        return $instance;
    }
}
