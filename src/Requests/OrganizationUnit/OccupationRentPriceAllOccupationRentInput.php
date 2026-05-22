<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OccupationRentPriceAllOccupationRentInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idOccupationRent = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_OccupationRent' => $this->idOccupationRent,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
