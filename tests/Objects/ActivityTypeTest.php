<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use StravaObjects\Objects\ActivityType;

class ActivityTypeTest extends TestCase
{
    public function testCreate()
    {
        $instance = ActivityType::create('Run');

        $this->assertInstanceOf(ActivityType::class, $instance);
    }

    public function testCreateWithInvalidArgument()
    {
        $this->expectException(InvalidArgumentException::class);

        ActivityType::create('Coding');
    }
}
