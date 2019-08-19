<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\Lap;

class LapTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/Lap.json'), true);
        $instance = Lap::create($parameters);

        $this->assertInstanceOf(Lap::class, $instance);
    }
}
