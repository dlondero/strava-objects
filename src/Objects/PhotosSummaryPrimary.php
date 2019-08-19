<?php declare(strict_types=1);

namespace StravaObjects\Objects;

class PhotosSummaryPrimary
{
    private int $id;
    private int $source;
    private string $uniqueId;
    private array $urls;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->id = (int)$parameters['id'];
        $instance->source = (int)$parameters['source'];
        $instance->uniqueId = (string)$parameters['unique_id'];
        $instance->urls = (array)$parameters['urls'];

        return $instance;
    }
}
