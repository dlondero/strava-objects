<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\SummaryAthlete;

class SummaryAthleteTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/SummaryAthlete.json'), true);
        $instance = SummaryAthlete::create($parameters);

        $this->assertInstanceOf(SummaryAthlete::class, $instance);
    }
}
