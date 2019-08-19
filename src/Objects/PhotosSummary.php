<?php declare(strict_types=1);

namespace StravaObjects\Objects;

class PhotosSummary
{
    private int $count;
    private PhotosSummaryPrimary $primary;
    private bool $usePrimaryPhoto;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->count = (int)$parameters['count'];
        $instance->primary = PhotosSummaryPrimary::create($parameters['primary']);
        $instance->usePrimaryPhoto = (bool)$parameters['use_primary_photo'];

        return $instance;
    }
}
