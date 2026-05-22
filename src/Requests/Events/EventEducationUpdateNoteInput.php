<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationUpdateNoteInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $projectNote = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ProjectNote' => $this->projectNote,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
