<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class RealtyAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idRealtyType = null,
        public readonly ?bool $searchByCity = null,
        public readonly ?bool $searchByName = null,
        public readonly ?string $searchString = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_RealtyType' => $this->idRealtyType,
            'SearchByCity' => $this->searchByCity,
            'SearchByName' => $this->searchByName,
            'SearchString' => $this->searchString,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
