<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

abstract class TestCase extends PHPUnitTestCase
{
    public function getContentsFromFile(string $path): string
    {
        $contents = file_get_contents($path);
        if (false === $contents) {
            throw new InvalidArgumentException();
        }

        return $contents;
    }
}
