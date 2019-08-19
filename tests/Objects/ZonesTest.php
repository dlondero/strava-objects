<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\Zones;

class ZonesTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/Zones.json'), true);
        $instance = Zones::create($parameters);

        $this->assertInstanceOf(Zones::class, $instance);
    }
}
