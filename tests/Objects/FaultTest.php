<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\Fault;

class FaultTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/Fault.json'), true);
        $instance = Fault::create($parameters);

        $this->assertInstanceOf(Fault::class, $instance);
    }
}
