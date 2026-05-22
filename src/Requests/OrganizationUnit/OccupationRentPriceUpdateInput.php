<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OccupationRentPriceUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idOccupation = null,
        public readonly ?int $idOccupationRent = null,
        public readonly ?string $occupationRent = null,
        public readonly ?string $idOccupationRentPriceType = null,
        public readonly ?string $occupationRentPriceType = null,
        public readonly ?int $basePrice = null,
        public readonly ?string $priceNote = null,
        public readonly ?int $scoutPrice = null,
        public readonly ?int $childPrice = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Occupation' => $this->idOccupation,
            'ID_OccupationRent' => $this->idOccupationRent,
            'OccupationRent' => $this->occupationRent,
            'ID_OccupationRentPriceType' => $this->idOccupationRentPriceType,
            'OccupationRentPriceType' => $this->occupationRentPriceType,
            'BasePrice' => $this->basePrice,
            'PriceNote' => $this->priceNote,
            'ScoutPrice' => $this->scoutPrice,
            'ChildPrice' => $this->childPrice,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
