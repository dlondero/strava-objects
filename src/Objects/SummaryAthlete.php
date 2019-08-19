<?php declare(strict_types=1);

namespace StravaObjects\Objects;

use DateTimeImmutable;
use StravaObjects\Util\StravaDateTimeImmutable;

class SummaryAthlete
{
    private int $id;
    private string $username;
    private ?int $resourceState;
    private string $firstName;
    private string $lastName;
    private string $profileMedium;
    private string $profile;
    private string $city;
    private string $state;
    private string $country;
    private string $sex;
    private ?string $friend;
    private ?string $follower;
    private bool $premium;
    private bool $summit;
    private int $badgeTypeId;
    private DateTimeImmutable $createdAt;
    private DateTimeImmutable $updatedAt;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->id = (int)$parameters['id'];
        $instance->username = (string)$parameters['username'];
        $instance->resourceState = isset($parameters['resource_state']) ? (int)$parameters['resource_state'] : null;
        $instance->firstName = (string)$parameters['firstname'];
        $instance->lastName = (string)$parameters['lastname'];
        $instance->profileMedium = (string)$parameters['profile_medium'];
        $instance->profile = (string)$parameters['profile'];
        $instance->city = (string)$parameters['city'];
        $instance->state = (string)$parameters['state'];
        $instance->country = (string)$parameters['country'];
        $instance->sex = (string)$parameters['sex'];
        $instance->friend = $parameters['friend'] ? (string)$parameters['friend'] : null;
        $instance->follower = $parameters['follower'] ? (string)$parameters['follower'] : null;
        $instance->premium = (bool)$parameters['premium'];
        $instance->summit = (bool)$parameters['summit'];
        $instance->badgeTypeId = (int)$parameters['badge_type_id'];
        $instance->createdAt = StravaDateTimeImmutable::createFromISO8601($parameters['created_at']);
        $instance->updatedAt = StravaDateTimeImmutable::createFromISO8601($parameters['updated_at']);

        return $instance;
    }

    public static function fromComment(array $parameters): self
    {
        $instance = new self();

        $instance->resourceState = isset($parameters['resource_state']) ? (int)$parameters['resource_state'] : null;
        $instance->firstName = (string)$parameters['firstname'];
        $instance->lastName = (string)$parameters['lastname'];

        return $instance;
    }
}
