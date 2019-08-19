<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\Error;

class ErrorTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/Error.json'), true);
        $instance = Error::create($parameters);

        $this->assertInstanceOf(Error::class, $instance);
    }
}
