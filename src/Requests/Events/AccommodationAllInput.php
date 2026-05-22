<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class AccommodationAllInput
{
    public function __construct(
        public readonly ?int $idEventCongress = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $dateFree = null,
        public readonly ?bool $addNoAccommodation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCongress' => $this->idEventCongress,
            'DisplayName' => $this->displayName,
            'ID_Person' => $this->idPerson,
            'DateFree' => $this->dateFree,
            'AddNoAccommodation' => $this->addNoAccommodation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
