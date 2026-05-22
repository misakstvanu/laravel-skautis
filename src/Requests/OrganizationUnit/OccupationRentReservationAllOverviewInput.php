<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OccupationRentReservationAllOverviewInput
{
    public function __construct(
        public readonly ?int $idOccupationRent = null,
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?string $idOccupationRentReservationState = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_OccupationRent' => $this->idOccupationRent,
            'ID' => $this->id,
            'ID_User' => $this->idUser,
            'ID_OccupationRentReservationState' => $this->idOccupationRentReservationState,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
