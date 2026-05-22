<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class AdvertisingUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $unitType = null,
        public readonly ?string $note = null,
        public readonly ?bool $isWater = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'RegistrationNumber' => $this->registrationNumber,
            'ID_UnitType' => $this->idUnitType,
            'UnitType' => $this->unitType,
            'Note' => $this->note,
            'IsWater' => $this->isWater,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
