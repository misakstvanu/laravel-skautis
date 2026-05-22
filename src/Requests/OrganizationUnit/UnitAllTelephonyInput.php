<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitAllTelephonyInput
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
        public readonly ?bool $registrationNumberStartWith = null,
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
            'RegistrationNumberStartWith' => $this->registrationNumberStartWith,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
