<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class AccommodationUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventCongress = null,
        public readonly ?string $displayName = null,
        public readonly ?float $fee = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventCongress' => $this->idEventCongress,
            'DisplayName' => $this->displayName,
            'Fee' => $this->fee,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
