<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitTreeRenewInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?string $idUnitTreeReason = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?int $idUnitParent = null,
        public readonly ?string $unitParent = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $idUnitType = null,
        public readonly ?int $idUnitMerge = null,
        public readonly ?string $unitMerge = null,
        public readonly ?string $idUnitFoundReason = null,
        public readonly ?string $unitFoundReason = null,
        public readonly ?string $unitFoundDescription = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ValidFrom' => $this->validFrom,
            'ValidTo' => $this->validTo,
            'ID_UnitTreeReason' => $this->idUnitTreeReason,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'ID_UnitParent' => $this->idUnitParent,
            'UnitParent' => $this->unitParent,
            'RegistrationNumber' => $this->registrationNumber,
            'ID_UnitType' => $this->idUnitType,
            'ID_UnitMerge' => $this->idUnitMerge,
            'UnitMerge' => $this->unitMerge,
            'ID_UnitFoundReason' => $this->idUnitFoundReason,
            'UnitFoundReason' => $this->unitFoundReason,
            'UnitFoundDescription' => $this->unitFoundDescription,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
