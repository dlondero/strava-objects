<?php declare(strict_types=1);

namespace StravaObjects\Objects;

use InvalidArgumentException;

abstract class BaseStream
{
    protected string $type;
    protected array $data;
    protected ?int $originalSize;
    protected ?string $resolution;
    protected ?string $seriesType;

    /**
     * @param array $parameters
     *
     * @return static
     */
    public static function create(array $parameters)
    {
        $instance = new static();

        $instance->type = (string)$parameters['type'];
        $instance->data = (array)$parameters['data'];
        $instance->originalSize = $parameters['original_size'] ? (int)$parameters['original_size'] : null;
        $instance->resolution = $parameters['resolution'] ? (string)$parameters['resolution'] : null;
        $instance->seriesType = $parameters['series_type'] ? (string)$parameters['series_type'] : null;

        return $instance;
    }

    /**
     * @param array $parameters
     *
     * @return static
     */
    public static function factory(array $parameters)
    {
        switch ($parameters['type']) {
            case 'time':
                return TimeStream::create($parameters);
                break;
            case 'distance':
                return DistanceStream::create($parameters);
                break;
            case 'latlng':
                return LatLngStream::create($parameters);
                break;
            case 'altitude':
                return AltitudeStream::create($parameters);
                break;
            case 'velocity_smooth':
                return SmoothVelocityStream::create($parameters);
                break;
            case 'heartrate':
                return HeartrateStream::create($parameters);
                break;
            case 'cadence':
                return CadenceStream::create($parameters);
                break;
            case 'watts':
                return PowerStream::create($parameters);
                break;
            case 'temp':
                return TemperatureStream::create($parameters);
                break;
            case 'moving':
                return MovingStream::create($parameters);
                break;
            case 'grade_smooth':
                return SmoothGradeStream::create($parameters);
                break;
            default:
                throw new InvalidArgumentException();
        }
    }
}
