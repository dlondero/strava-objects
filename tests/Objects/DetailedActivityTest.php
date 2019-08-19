<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\DetailedActivity;

class DetailedActivityTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/DetailedActivity.json'), true);
        $instance = DetailedActivity::create($parameters);

        $this->assertInstanceOf(DetailedActivity::class, $instance);
    }
}
