<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonAllGlobalSearchInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $identificationCode = null,
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $name = null,
        public readonly ?bool $useParentCode = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'IdentificationCode' => $this->identificationCode,
            'FirstName' => $this->firstName,
            'LastName' => $this->lastName,
            'Name' => $this->name,
            'UseParentCode' => $this->useParentCode,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
