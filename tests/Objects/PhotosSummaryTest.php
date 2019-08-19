<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\PhotosSummary;

class PhotosSummaryTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/PhotosSummary.json'), true);
        $instance = PhotosSummary::create($parameters);

        $this->assertInstanceOf(PhotosSummary::class, $instance);
    }
}
