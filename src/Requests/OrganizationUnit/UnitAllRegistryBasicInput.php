<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitAllRegistryBasicInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $search = null,
        public readonly ?bool $isValid = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'Search' => $this->search,
            'IsValid' => $this->isValid,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
