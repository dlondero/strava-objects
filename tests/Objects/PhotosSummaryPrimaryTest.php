<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\PhotosSummaryPrimary;

class PhotosSummaryPrimaryTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/PhotoSummaryPrimary.json'), true);
        $instance = PhotosSummaryPrimary::create($parameters);

        $this->assertInstanceOf(PhotosSummaryPrimary::class, $instance);
    }
}
