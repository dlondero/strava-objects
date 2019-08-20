<?php declare(strict_types=1);

namespace StravaObjects\Objects;

use DateTimeImmutable;
use StravaObjects\Util\StravaDateTimeImmutable;

class SummaryAthlete
{
    private ?int $id;
    private ?string $username;
    private ?int $resourceState;
    private string $firstName;
    private string $lastName;
    private ?string $profileMedium;
    private ?string $profile;
    private ?string $city;
    private ?string $state;
    private ?string $country;
    private ?string $sex;
    private ?string $friend;
    private ?string $follower;
    private ?bool $premium;
    private ?bool $summit;
    private ?int $badgeTypeId;
    private ?DateTimeImmutable $createdAt;
    private ?DateTimeImmutable $updatedAt;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->id = isset($parameters['id']) ? (int)$parameters['id'] : null;
        $instance->username = isset($parameters['username']) ? (string)$parameters['username'] : null;
        $instance->resourceState = isset($parameters['resource_state']) ? (int)$parameters['resource_state'] : null;
        $instance->firstName = (string)$parameters['firstname'];
        $instance->lastName = (string)$parameters['lastname'];
        $instance->profileMedium = isset($parameters['profile_medium']) ? (string)$parameters['profile_medium'] : null;
        $instance->profile = isset($parameters['profile']) ? (string)$parameters['profile'] : null;
        $instance->city = isset($parameters['city']) ? (string)$parameters['city'] : null;
        $instance->state = isset($parameters['state']) ? (string)$parameters['state'] : null;
        $instance->country = isset($parameters['country']) ? (string)$parameters['country'] : null;
        $instance->sex = isset($parameters['sex']) ? (string)$parameters['sex'] : null;
        $instance->friend = isset($parameters['friend']) ? (string)$parameters['friend'] : null;
        $instance->follower = isset($parameters['follower']) ? (string)$parameters['follower'] : null;
        $instance->premium = isset($parameters['premium']) ? (bool)$parameters['premium'] : null;
        $instance->summit = isset($parameters['summit']) ? (bool)$parameters['summit'] : null;
        $instance->badgeTypeId = isset($parameters['badge_type_id']) ? (int)$parameters['badge_type_id'] : null;
        $instance->createdAt = isset($parameters['created_at']) ? StravaDateTimeImmutable::createFromISO8601($parameters['created_at']) : null;
        $instance->updatedAt = isset($parameters['updated_at']) ? StravaDateTimeImmutable::createFromISO8601($parameters['updated_at']) : null;

        return $instance;
    }
}
