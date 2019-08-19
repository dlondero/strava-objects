<?php declare(strict_types=1);

namespace StravaObjects\Objects;

use DateTimeImmutable;
use StravaObjects\Collections\Collection;
use StravaObjects\Collections\SummaryClubCollection;
use StravaObjects\Collections\SummaryGearCollection;
use StravaObjects\Util\StravaDateTimeImmutable;

class DetailedAthlete
{
    private int $id;
    private string $username;
    private int $resourceState;
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
    private DateTimeImmutable $createdAt;
    private DateTimeImmutable $updatedAt;
    private int $badgeTypeId;
    private int $followerCount;
    private int $friendCount;
    private int $mutualFriendCount;
    private int $athleteType;
    private string $datePreference;
    private string $measurementPreference;
    private ?int $ftp;
    private float $weight;
    private SummaryClubCollection $clubs;
    private SummaryGearCollection $bikes;
    private SummaryGearCollection $shoes;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->id = (int)$parameters['id'];
        $instance->username = (string)$parameters['username'];
        $instance->resourceState = (int)$parameters['resource_state'];
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
        $instance->createdAt = StravaDateTimeImmutable::createFromISO8601($parameters['created_at']);
        $instance->updatedAt = StravaDateTimeImmutable::createFromISO8601($parameters['updated_at']);
        $instance->badgeTypeId = (int)$parameters['badge_type_id'];
        $instance->followerCount = (int)$parameters['follower_count'];
        $instance->friendCount = (int)$parameters['friend_count'];
        $instance->mutualFriendCount = (int)$parameters['mutual_friend_count'];
        $instance->athleteType = (int)$parameters['athlete_type'];
        $instance->datePreference = (string)$parameters['date_preference'];
        $instance->measurementPreference = (string)$parameters['measurement_preference'];
        $instance->ftp = $parameters['ftp'] ? (int)$parameters['ftp'] : null;
        $instance->weight = (float)$parameters['weight'];
        $instance->clubs = Collection::create($parameters['clubs'], SummaryClubCollection::class);
        $instance->bikes = Collection::create($parameters['bikes'], SummaryGearCollection::class);
        $instance->shoes = Collection::create($parameters['shoes'], SummaryGearCollection::class);

        return $instance;
    }
}
