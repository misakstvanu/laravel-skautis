<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitMistakeReportUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
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
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'RegistrationNumber' => $this->registrationNumber,
            'ID_Mistake' => $this->idMistake,
            'Mistake' => $this->mistake,
            'DisplayName' => $this->displayName,
            'ParentComment' => $this->parentComment,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
