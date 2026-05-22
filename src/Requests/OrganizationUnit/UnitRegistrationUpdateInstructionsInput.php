<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitRegistrationUpdateInstructionsInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $idUnitType = null,
        public readonly ?int $year = null,
        public readonly ?string $instructions = null,
        public readonly ?string $dateChecked = null,
        public readonly ?string $dateConfirmed = null,
        public readonly ?bool $isDelivered = null,
        public readonly ?bool $isAccepted = null,
        public readonly ?bool $showServices = null,
        public readonly ?int $idUnitRegistrationParent = null,
        public readonly ?string $unitRegistrationParent = null,
        public readonly ?string $instructionsParent = null,
        public readonly ?bool $parentIsDelivered = null,
        public readonly ?bool $parentIsAccepted = null,
        public readonly ?bool $parentHasCreated = null,
        public readonly ?bool $parentShowServices = null,
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
            'RegistrationNumber' => $this->registrationNumber,
            'ID_UnitType' => $this->idUnitType,
            'Year' => $this->year,
            'Instructions' => $this->instructions,
            'DateChecked' => $this->dateChecked,
            'DateConfirmed' => $this->dateConfirmed,
            'IsDelivered' => $this->isDelivered,
            'IsAccepted' => $this->isAccepted,
            'ShowServices' => $this->showServices,
            'ID_UnitRegistrationParent' => $this->idUnitRegistrationParent,
            'UnitRegistrationParent' => $this->unitRegistrationParent,
            'InstructionsParent' => $this->instructionsParent,
            'ParentIsDelivered' => $this->parentIsDelivered,
            'ParentIsAccepted' => $this->parentIsAccepted,
            'ParentHasCreated' => $this->parentHasCreated,
            'ParentShowServices' => $this->parentShowServices,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
