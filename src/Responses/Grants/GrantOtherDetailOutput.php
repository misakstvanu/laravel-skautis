<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantOtherDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
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

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            idApplication: isset($obj->{'ID_Application'}) ? (string) $obj->{'ID_Application'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGrant: isset($obj->{'ID_Grant'}) ? (int) $obj->{'ID_Grant'} : null,
            goal: isset($obj->{'Goal'}) ? (string) $obj->{'Goal'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            targetGroup: isset($obj->{'TargetGroup'}) ? (string) $obj->{'TargetGroup'} : null,
            idRealtyCollection: isset($obj->{'ID_RealtyCollection'}) ? (int) $obj->{'ID_RealtyCollection'} : null,
            realtyCollection: isset($obj->{'RealtyCollection'}) ? (string) $obj->{'RealtyCollection'} : null,
            ownershipListNumber: isset($obj->{'OwnershipListNumber'}) ? (int) $obj->{'OwnershipListNumber'} : null,
            cadastralArea: isset($obj->{'CadastralArea'}) ? (string) $obj->{'CadastralArea'} : null,
            buildingOwner: isset($obj->{'BuildingOwner'}) ? (string) $obj->{'BuildingOwner'} : null,
            parcelNumbers: isset($obj->{'ParcelNumbers'}) ? (string) $obj->{'ParcelNumbers'} : null,
            parcelOwner: isset($obj->{'ParcelOwner'}) ? (string) $obj->{'ParcelOwner'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            idGrantRealtyCollection: isset($obj->{'ID_GrantRealtyCollection'}) ? (int) $obj->{'ID_GrantRealtyCollection'} : null,
        );
    }
}
