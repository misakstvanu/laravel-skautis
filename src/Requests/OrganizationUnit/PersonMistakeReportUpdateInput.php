<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonMistakeReportUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idUnitRegistration = null,
        public readonly ?string $unitRegistrationNumber = null,
        public readonly ?string $unit = null,
        public readonly ?int $idMistake = null,
        public readonly ?string $mistake = null,
        public readonly ?string $displayName = null,
        public readonly ?string $parentComment = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'ID_Unit' => $this->idUnit,
            'ID_UnitRegistration' => $this->idUnitRegistration,
            'UnitRegistrationNumber' => $this->unitRegistrationNumber,
            'Unit' => $this->unit,
            'ID_Mistake' => $this->idMistake,
            'Mistake' => $this->mistake,
            'DisplayName' => $this->displayName,
            'ParentComment' => $this->parentComment,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
