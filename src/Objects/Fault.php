<?php declare(strict_types=1);

namespace StravaObjects\Objects;

use StravaObjects\Collections\Collection;
use StravaObjects\Collections\ErrorCollection;

class Fault
{
    private ErrorCollection $errors;
    private string $message;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->errors = Collection::create($parameters['errors'], ErrorCollection::class);
        $instance->message = (string)$parameters['message'];

        return $instance;
    }
}
