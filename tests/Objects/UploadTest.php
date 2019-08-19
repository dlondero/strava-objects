<?php declare(strict_types=1);

namespace Tests\StravaObjects\Objects;

use StravaObjects\Objects\Upload;

class UploadTest extends TestCase
{
    public function testCreate()
    {
        $parameters = json_decode($this->getContentsFromFile(__DIR__.'/../json/Upload.json'), true);
        $instance = Upload::create($parameters);

        $this->assertInstanceOf(Upload::class, $instance);
    }
}
