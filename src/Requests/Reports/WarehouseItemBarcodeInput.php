<?php

namespace Misakstvanu\LaravelSkautis\Requests\Reports;

final class WarehouseItemBarcodeInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $int = null,
        public readonly ?string $barcodeType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'int' => $this->int,
            'BarcodeType' => $this->barcodeType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
