<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class ParticipantEducationUpdateRenewInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idDelegate = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Delegate' => $this->idDelegate,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
