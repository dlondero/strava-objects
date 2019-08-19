<?php declare(strict_types=1);

namespace StravaObjects\Objects;

use DateTimeImmutable;
use StravaObjects\Util\StravaDateTimeImmutable;

class SummaryActivity
{
    private int $id;
    private int $resourceState;
    private int $externalId;
    private int $uploadId;
    private MetaAthlete $athlete;
    private string $name;
    private float $distance;
    private int $movingTime;
    private int $elapsedTime;
    private float $totalElevationGain;
    private float $elevationHigh;
    private float $elevationLow;
    private ActivityType $type;
    private DateTimeImmutable $startDate;
    private DateTimeImmutable $startDateLocal;
    private string $timezone;
    private ?LatLng $startLatLng;
    private ?LatLng $endLatLng;
    private int $achievementCount;
    private int $kudosCount;
    private int $commentCount;
    private int $athleteCount;
    private int $photoCount;
    private int $totalPhotoCount;
    private PolylineMap $map;
    private bool $trainer;
    private bool $commute;
    private bool $manual;
    private bool $private;
    private bool $flagged;
    private ?int $workoutType;
    private string $uploadIdString;
    private float $averageSpeed;
    private float $maxSpeed;
    private bool $hasKudoed;
    private string $gearId;
    private float $kilojoules;
    private float $averageWatts;
    private bool $deviceWatts;
    private int $maxWatts;
    private int $weightedAverageWatts;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->id = (int)$parameters['id'];
        $instance->resourceState = (int)$parameters['resourceState'];
        $instance->externalId = (int)$parameters['externalId'];
        $instance->uploadId = (int)$parameters['uploadId'];
        $instance->athlete = MetaAthlete::create($parameters['athlete']);
        $instance->name = (string)$parameters['name'];
        $instance->distance = (float)$parameters['distance'];
        $instance->movingTime = (int)$parameters['moving_time'];
        $instance->elapsedTime = (int)$parameters['elapsed_time'];
        $instance->totalElevationGain = (float)$parameters['total_elevation_gain'];
        $instance->elevationHigh = (float)$parameters['elevation_high'];
        $instance->elevationLow = (float)$parameters['elevation_low'];
        $instance->type = ActivityType::create($parameters['type']);
        $instance->startDate = StravaDateTimeImmutable::createFromISO8601($parameters['start_date']);
        $instance->startDateLocal = StravaDateTimeImmutable::createFromISO8601($parameters['start_date_local']);
        $instance->timezone = (string)$parameters['timezone'];
        $instance->startLatLng = $parameters['start_latlng'] ? LatLng::create($parameters['start_latlng']) : null;
        $instance->endLatLng = $parameters['end_latlng'] ? LatLng::create($parameters['end_latlng']) : null;
        $instance->achievementCount = (int)$parameters['achievement_count'];
        $instance->kudosCount = (int)$parameters['kudos_count'];
        $instance->commentCount = (int)$parameters['comment_count'];
        $instance->athleteCount = (int)$parameters['athlete_count'];
        $instance->photoCount = (int)$parameters['photo_count'];
        $instance->totalPhotoCount = (int)$parameters['total_photo_count'];
        $instance->map = PolylineMap::create($parameters['map']);
        $instance->trainer = (bool)$parameters['trainer'];
        $instance->commute = (bool)$parameters['commute'];
        $instance->manual = (bool)$parameters['manual'];
        $instance->private = (bool)$parameters['private'];
        $instance->flagged = (bool)$parameters['flagged'];
        $instance->workoutType = $parameters['workout_type'] ? (int)$parameters['workout_type'] : null;
        $instance->uploadIdString = (string)$parameters['upload_id_string'];
        $instance->averageSpeed = (float)$parameters['average_speed'];
        $instance->maxSpeed = (float)$parameters['max_speed'];
        $instance->hasKudoed = (bool)$parameters['has_kudoed'];
        $instance->gearId = (string)$parameters['gear_id'];
        $instance->kilojoules = (float)$parameters['kilojoules'];
        $instance->averageWatts = (float)$parameters['average_watts'];
        $instance->deviceWatts = (bool)$parameters['device_watts'];
        $instance->maxWatts = (int)$parameters['max_watts'];
        $instance->weightedAverageWatts = (int)$parameters['weighted_average_watts'];

        return $instance;
    }
}
