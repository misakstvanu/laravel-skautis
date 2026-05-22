<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitCancelTypeAllInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
