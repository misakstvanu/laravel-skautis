<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseTagInsertEventInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEventGeneral = null,
        public readonly ?int $idEvent = null,
        public readonly ?string $event = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $color = null,
        public readonly ?int $idWarehouse = null,
        public readonly ?string $warehouse = null,
        public readonly ?bool $canUpdate = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'ID_EventEducation' => $this->idEventEducation,
            'ID_EventGeneral' => $this->idEventGeneral,
            'ID_Event' => $this->idEvent,
            'Event' => $this->event,
            'RegistrationNumber' => $this->registrationNumber,
            'Color' => $this->color,
            'ID_Warehouse' => $this->idWarehouse,
            'Warehouse' => $this->warehouse,
            'CanUpdate' => $this->canUpdate,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
