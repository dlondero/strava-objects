<?php declare(strict_types=1);

namespace StravaObjects\Objects;

class DetailedClub
{
    private int $id;
    private int $resourceState;
    private string $name;
    private string $profileMedium;
    private string $profile;
    private string $coverPhoto;
    private string $coverPhotoSmall;
    private string $sportType;
    private string $city;
    private string $state;
    private string $country;
    private bool $private;
    private int $memberCount;
    private bool $featured;
    private bool $verified;
    private string $url;
    private string $membership;
    private bool $admin;
    private bool $owner;
    private int $followingCount;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->id = (int)$parameters['id'];
        $instance->resourceState = (int)$parameters['resource_state'];
        $instance->name = (string)$parameters['name'];
        $instance->profileMedium = (string)$parameters['profile_medium'];
        $instance->profile = (string)$parameters['profile'];
        $instance->coverPhoto = (string)$parameters['cover_photo'];
        $instance->coverPhotoSmall = (string)$parameters['cover_photo_small'];
        $instance->sportType = (string)$parameters['sport_type'];
        $instance->city = (string)$parameters['city'];
        $instance->state = (string)$parameters['state'];
        $instance->country = (string)$parameters['country'];
        $instance->private = (bool)$parameters['private'];
        $instance->memberCount = (int)$parameters['member_count'];
        $instance->featured = (bool)$parameters['featured'];
        $instance->verified = (bool)$parameters['verified'];
        $instance->url = (string)$parameters['url'];
        $instance->membership = (string)$parameters['membership'];
        $instance->admin = (bool)$parameters['admin'];
        $instance->owner = (bool)$parameters['owner'];
        $instance->followingCount = (int)$parameters['following_count'];

        return $instance;
    }
}
