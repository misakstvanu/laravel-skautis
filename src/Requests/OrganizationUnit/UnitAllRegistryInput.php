<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitAllRegistryInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $displayName = null,
        public readonly ?string $iC = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $location = null,
        public readonly ?string $parentDisplayName = null,
        public readonly ?string $parentRegistrationNumber = null,
        public readonly ?bool $isValid = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'DisplayName' => $this->displayName,
            'IC' => $this->iC,
            'RegistrationNumber' => $this->registrationNumber,
            'Location' => $this->location,
            'ParentDisplayName' => $this->parentDisplayName,
            'ParentRegistrationNumber' => $this->parentRegistrationNumber,
            'IsValid' => $this->isValid,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
