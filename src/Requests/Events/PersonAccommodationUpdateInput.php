<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class PersonAccommodationUpdateInput
{
    public function __construct(
        public readonly ?int $idEventCongress = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $day = null,
        public readonly ?int $idAccommodation = null,
        public readonly ?string $note = null,
        public readonly ?bool $noAccommodation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCongress' => $this->idEventCongress,
            'ID_Person' => $this->idPerson,
            'Day' => $this->day,
            'ID_Accommodation' => $this->idAccommodation,
            'Note' => $this->note,
            'NoAccommodation' => $this->noAccommodation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
