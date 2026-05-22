<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class VatRateDetailVatRateTypeInput
{
    public function __construct(
        public readonly ?string $idVatRateType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_VatRateType' => $this->idVatRateType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
