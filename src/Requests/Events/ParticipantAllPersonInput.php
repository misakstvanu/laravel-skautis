<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class ParticipantAllPersonInput
{
    public function __construct(
        public readonly ?int $idEventCongress = null,
        public readonly ?string $displayName = null,
        public readonly ?int $id = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCongress' => $this->idEventCongress,
            'DisplayName' => $this->displayName,
            'ID' => $this->id,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
