<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseItemAllBorrowableInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $keyword = null,
        public readonly ?string $string = null,
        public readonly ?int $int = null,
        public readonly ?string $city = null,
        public readonly ?int $maxPrice = null,
        public readonly ?bool $isInStock = null,
        public readonly ?bool $isCommercial = null,
        public readonly ?string $dateFrom = null,
        public readonly ?string $dateTo = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'Keyword' => $this->keyword,
            'string' => $this->string,
            'int' => $this->int,
            'City' => $this->city,
            'MaxPrice' => $this->maxPrice,
            'IsInStock' => $this->isInStock,
            'IsCommercial' => $this->isCommercial,
            'DateFrom' => $this->dateFrom,
            'DateTo' => $this->dateTo,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
