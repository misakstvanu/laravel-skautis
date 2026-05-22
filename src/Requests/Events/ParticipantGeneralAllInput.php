<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class ParticipantGeneralAllInput
{
    public function __construct(
        public readonly ?int $idEventGeneral = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventGeneral' => $this->idEventGeneral,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
