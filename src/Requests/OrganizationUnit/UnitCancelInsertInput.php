<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitCancelInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $idUnitCancelType = null,
        public readonly ?string $unitCancelType = null,
        public readonly ?string $dateDecision = null,
        public readonly ?string $description = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $validTo = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'ID_UnitCancelType' => $this->idUnitCancelType,
            'UnitCancelType' => $this->unitCancelType,
            'DateDecision' => $this->dateDecision,
            'Description' => $this->description,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'ValidTo' => $this->validTo,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
