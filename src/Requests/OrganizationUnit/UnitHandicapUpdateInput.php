<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitHandicapUpdateInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?int $idHandicapType = null,
        public readonly ?int $value = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'ID_HandicapType' => $this->idHandicapType,
            'Value' => $this->value,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
