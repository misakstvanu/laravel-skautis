<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseAdminInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvent = null,
        public readonly ?string $event = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEventGeneral = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $note = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Event' => $this->idEvent,
            'Event' => $this->event,
            'ID_EventEducation' => $this->idEventEducation,
            'ID_EventGeneral' => $this->idEventGeneral,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'Note' => $this->note,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
