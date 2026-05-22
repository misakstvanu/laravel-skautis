<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OccupationRentAllPublicInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $occupationLanguageList = null,
        public readonly ?float $basePrice = null,
        public readonly ?float $scoutPrice = null,
        public readonly ?float $childPrice = null,
        public readonly ?string $priceTypeList = null,
        public readonly ?int $idOccupation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'OccupationLanguageList' => $this->occupationLanguageList,
            'BasePrice' => $this->basePrice,
            'ScoutPrice' => $this->scoutPrice,
            'ChildPrice' => $this->childPrice,
            'PriceTypeList' => $this->priceTypeList,
            'ID_Occupation' => $this->idOccupation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
