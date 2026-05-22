<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantOtherInsertInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $id = null,
        public readonly ?int $idGrant = null,
        public readonly ?string $goal = null,
        public readonly ?string $description = null,
        public readonly ?string $targetGroup = null,
        public readonly ?int $idRealtyCollection = null,
        public readonly ?string $realtyCollection = null,
        public readonly ?int $ownershipListNumber = null,
        public readonly ?string $cadastralArea = null,
        public readonly ?string $buildingOwner = null,
        public readonly ?string $parcelNumbers = null,
        public readonly ?string $parcelOwner = null,
        public readonly ?string $city = null,
        public readonly ?int $idGrantRealtyCollection = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'ID_Grant' => $this->idGrant,
            'Goal' => $this->goal,
            'Description' => $this->description,
            'TargetGroup' => $this->targetGroup,
            'ID_RealtyCollection' => $this->idRealtyCollection,
            'RealtyCollection' => $this->realtyCollection,
            'OwnershipListNumber' => $this->ownershipListNumber,
            'CadastralArea' => $this->cadastralArea,
            'BuildingOwner' => $this->buildingOwner,
            'ParcelNumbers' => $this->parcelNumbers,
            'ParcelOwner' => $this->parcelOwner,
            'City' => $this->city,
            'ID_GrantRealtyCollection' => $this->idGrantRealtyCollection,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
