<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\DetailedAthlete;

class DetailedAthleteTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/DetailedAthlete.json'), true);
        $instance = DetailedAthlete::create($parameters);

        $this->assertInstanceOf(DetailedAthlete::class, $instance);
    }
}
