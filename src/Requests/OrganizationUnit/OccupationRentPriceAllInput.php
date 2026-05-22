<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OccupationRentPriceAllInput
{
    public function __construct(
        public readonly ?int $idOccupation = null,
        public readonly ?int $id = null,
        public readonly ?string $idOccupationRentPriceType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Occupation' => $this->idOccupation,
            'ID' => $this->id,
            'ID_OccupationRentPriceType' => $this->idOccupationRentPriceType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
