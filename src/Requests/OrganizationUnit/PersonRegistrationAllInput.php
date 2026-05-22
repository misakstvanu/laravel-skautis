<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonRegistrationAllInput
{
    public function __construct(
        public readonly ?int $idUnitRegistration = null,
        public readonly ?bool $includeChild = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_UnitRegistration' => $this->idUnitRegistration,
            'IncludeChild' => $this->includeChild,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
