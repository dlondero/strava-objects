<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\RunningRace;

class RunningRaceTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/RunningRace.json'), true);
        $instance = RunningRace::create($parameters);

        $this->assertInstanceOf(RunningRace::class, $instance);
    }
}
