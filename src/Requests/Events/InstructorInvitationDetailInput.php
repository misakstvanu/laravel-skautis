<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class InstructorInvitationDetailInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $accessCode = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'AccessCode' => $this->accessCode,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
