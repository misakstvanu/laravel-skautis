<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OccupationRentReservationUpdateRejectInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $rejectionReason = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'RejectionReason' => $this->rejectionReason,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
