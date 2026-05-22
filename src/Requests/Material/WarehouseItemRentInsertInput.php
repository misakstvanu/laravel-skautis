<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseItemRentInsertInput
{
    public function __construct(
        public readonly ?int $int = null,
        public readonly ?int $idWarehouseItemReservation = null,
        public readonly ?string $startDate = null,
        public readonly ?string $endDate = null,
        public readonly ?string $note = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'int' => $this->int,
            'ID_WarehouseItemReservation' => $this->idWarehouseItemReservation,
            'StartDate' => $this->startDate,
            'EndDate' => $this->endDate,
            'Note' => $this->note,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
