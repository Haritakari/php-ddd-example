<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Videos\Application\Create;

use CodelyTv\Shared\Domain\Bus\Command\Command;

final class CreateVideoCommand implements Command
{
    private string $id;
    private string $type;
    private string $title;
    private string $url;
    private string $courseId;

    public function __construct(string $id, string $type, string $title, string $url, string $courseId)
    {
        $this->id       = $id;
        $this->type     = $type;
        $this->title    = $title;
        $this->url      = $url;
        $this->courseId = $courseId;
    }

    public function id(): string
    {
        return $this->id;
    }

    public function type(): string
    {
        return $this->type;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function courseId(): string
    {
        return $this->courseId;
    }
}