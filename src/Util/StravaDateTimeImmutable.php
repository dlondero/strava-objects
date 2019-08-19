<?php declare(strict_types=1);

namespace StravaObjects\Util;

use DateTimeImmutable;
use InvalidArgumentException;

class StravaDateTimeImmutable
{
    public static function createFromISO8601(string $time): DateTimeImmutable
    {
        $dateTime = DateTimeImmutable::createFromFormat(DateTimeImmutable::ISO8601, $time);
        if (false === $dateTime) {
            throw new InvalidArgumentException();
        }

        return $dateTime;
    }
}
