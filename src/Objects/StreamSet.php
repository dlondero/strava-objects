<?php declare(strict_types=1);

namespace StravaObjects\Objects;

class StreamSet
{
    private ?TimeStream $time;
    private ?DistanceStream $distance;
    private ?LatLngStream $latLng;
    private ?AltitudeStream $altitude;
    private ?SmoothVelocityStream $velocitySmooth;
    private ?HeartrateStream $heartrate;
    private ?CadenceStream $cadence;
    private ?PowerStream $watts;
    private ?TemperatureStream $temp;
    private ?MovingStream $moving;
    private ?SmoothGradeStream $gradeSmooth;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        foreach ($parameters as $parameterList) {
            $stream = BaseStream::factory($parameterList);

            switch (get_class($stream)) {
                case TimeStream::class:
                    $instance->time = $stream;
                    break;
                case DistanceStream::class:
                    $instance->distance = $stream;
                    break;
                case LatLngStream::class:
                    $instance->latLng = $stream;
                    break;
                case AltitudeStream::class:
                    $instance->altitude = $stream;
                    break;
                case SmoothVelocityStream::class:
                    $instance->velocitySmooth = $stream;
                    break;
                case HeartrateStream::class:
                    $instance->heartrate = $stream;
                    break;
                case CadenceStream::class:
                    $instance->cadence = $stream;
                    break;
                case PowerStream::class:
                    $instance->watts = $stream;
                    break;
                case TemperatureStream::class:
                    $instance->temp = $stream;
                    break;
                case MovingStream::class:
                    $instance->moving = $stream;
                    break;
                case SmoothGradeStream::class:
                    $instance->gradeSmooth = $stream;
                    break;
            }
        }

        return $instance;
    }
}
