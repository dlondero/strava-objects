<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\DetailedClub;

class DetailedClubTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/DetailedClub.json'), true);
        $instance = DetailedClub::create($parameters);

        $this->assertInstanceOf(DetailedClub::class, $instance);
    }
}
