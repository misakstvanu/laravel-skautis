<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantRealtyCollectionInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGrant = null,
        public readonly ?int $idRealtyCollection = null,
        public readonly ?int $ownershipListNumber = null,
        public readonly ?string $cadastralArea = null,
        public readonly ?string $buildingOwner = null,
        public readonly ?string $parcelNumbers = null,
        public readonly ?string $parcelOwner = null,
        public readonly ?string $realtyCollection = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Grant' => $this->idGrant,
            'ID_RealtyCollection' => $this->idRealtyCollection,
            'OwnershipListNumber' => $this->ownershipListNumber,
            'CadastralArea' => $this->cadastralArea,
            'BuildingOwner' => $this->buildingOwner,
            'ParcelNumbers' => $this->parcelNumbers,
            'ParcelOwner' => $this->parcelOwner,
            'RealtyCollection' => $this->realtyCollection,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
