<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\DetailedGear;

class DetailedGearTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/DetailedGear.json'), true);
        $instance = DetailedGear::create($parameters);

        $this->assertInstanceOf(DetailedGear::class, $instance);
    }
}
