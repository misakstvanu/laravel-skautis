<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationUpdateOverviewInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $projectNote = null,
        public readonly ?bool $hasProject = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ProjectNote' => $this->projectNote,
            'HasProject' => $this->hasProject,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
