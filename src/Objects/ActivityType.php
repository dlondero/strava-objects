<?php declare(strict_types=1);

namespace StravaObjects\Objects;

use InvalidArgumentException;
use ReflectionClass;

class ActivityType
{
    const ALPINE_SKI = 'AlpineSki';
    const BACKCOUNTRY_SKI = 'BackcountrySki';
    const CANOEING = 'Canoeing';
    const CROSSFIT = 'Crossfit';
    const EBIKE_RIDE = 'EBikeRide';
    const ELLIPTICAL = 'Elliptical';
    const GOLF = 'Golf';
    const HANDCYCLE = 'Handcycle';
    const HIKE = 'Hike';
    const ICE_SKATE = 'IceSkate';
    const INLINE_SKATE = 'InlineSkate';
    const KAYAKING = 'Kayaking';
    const KITESURF = 'Kitesurf';
    const NORDIC_SKI = 'NordicSki';
    const RIDE = 'Ride';
    const ROCK_CLIMBING = 'RockClimbing';
    const ROLLER_SKI = 'RollerSki';
    const ROWING = 'Rowing';
    const RUN = 'Run';
    const SAIL = 'Sail';
    const SKATEBOARD = 'Skateboard';
    const SNOWBOARD = 'Snowboard';
    const SNOWSHOE = 'Snowshoe';
    const SOCCER = 'Soccer';
    const STAIR_STEPPER = 'StairStepper';
    const STAND_UP_PADDLING = 'StandUpPaddling';
    const SURFING = 'Surfing';
    const SWIM = 'Swim';
    const VELOMOBILE = 'Velomobile';
    const VIRTUAL_RIDE = 'VirtualRide';
    const VIRTUAL_RUN = 'VirtualRun';
    const WALK = 'Walk';
    const WEIGHT_TRAINING = 'WeightTraining';
    const WHEELCHAIR = 'Wheelchair';
    const WINDSURF = 'Windsurf';
    const WORKOUT = 'Workout';
    const YOGA = 'Yoga';

    private string $type;

    private function __construct()
    {
    }

    public static function create(string $type): self
    {
        if (!self::isAllowedArgument($type)) {
            throw new InvalidArgumentException();
        }

        $instance = new self();

        $instance->type = $type;

        return $instance;
    }

    private static function isAllowedArgument(string $value): bool
    {
        $reflectionClass = new ReflectionClass(__CLASS__);
        $constantList = $reflectionClass->getConstants();

        return array_key_exists($value, array_flip($constantList));
    }
}
