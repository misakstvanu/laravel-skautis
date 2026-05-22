<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class VatRateDetailPriceInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?float $price = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Price' => $this->price,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
