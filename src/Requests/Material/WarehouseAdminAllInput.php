<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseAdminAllInput
{
    public function __construct(
        public readonly ?int $idEvent = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEventGeneral = null,
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Event' => $this->idEvent,
            'ID_EventEducation' => $this->idEventEducation,
            'ID_EventGeneral' => $this->idEventGeneral,
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
