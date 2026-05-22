<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class ParticipantEducationDeleteInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $signOutNote = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'SignOutNote' => $this->signOutNote,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
