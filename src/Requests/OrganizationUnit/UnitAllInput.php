<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitAllInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $id = null,
        public readonly ?int $idGroup = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $displayName = null,
        public readonly ?string $location = null,
        public readonly ?string $accountNumber = null,
        public readonly ?string $iC = null,
        public readonly ?string $email = null,
        public readonly ?string $phone = null,
        public readonly ?int $idUnitParent = null,
        public readonly ?int $idUnitChild = null,
        public readonly ?int $idUnitTree = null,
        public readonly ?bool $registrationNumberStartWith = null,
        public readonly ?int $idAlignmentType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'ID_Group' => $this->idGroup,
            'ID_UnitType' => $this->idUnitType,
            'RegistrationNumber' => $this->registrationNumber,
            'DisplayName' => $this->displayName,
            'Location' => $this->location,
            'AccountNumber' => $this->accountNumber,
            'IC' => $this->iC,
            'Email' => $this->email,
            'Phone' => $this->phone,
            'ID_UnitParent' => $this->idUnitParent,
            'ID_UnitChild' => $this->idUnitChild,
            'ID_UnitTree' => $this->idUnitTree,
            'RegistrationNumberStartWith' => $this->registrationNumberStartWith,
            'ID_AlignmentType' => $this->idAlignmentType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
