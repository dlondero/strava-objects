<?php declare(strict_types=1);

namespace StravaObjects\Objects;

use DateTimeImmutable;
use StravaObjects\Util\StravaDateTimeImmutable;

class Comment
{
    private int $id;
    private int $activityId;
    private ?int $postId;
    private string $text;
    private SummaryAthlete $athlete;
    private DateTimeImmutable $createdAt;

    private function __construct()
    {
    }

    public static function create(array $parameters): self
    {
        $instance = new self();

        $instance->id = (int)$parameters['id'];
        $instance->activityId = (int)$parameters['activity_id'];
        $instance->postId = $parameters['post_id'] ? (int)$parameters['post_id'] : null;
        $instance->text = (string)$parameters['text'];
        $instance->athlete = SummaryAthlete::fromComment($parameters['athlete']);
        $instance->createdAt = StravaDateTimeImmutable::createFromISO8601($parameters['created_at']);

        return $instance;
    }
}
