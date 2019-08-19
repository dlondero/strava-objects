<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\SummaryActivity;

class SummaryActivityTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/SummaryActivity.json'), true);
        $instance = SummaryActivity::create($parameters);

        $this->assertInstanceOf(SummaryActivity::class, $instance);
    }
}
