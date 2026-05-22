<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitTreeAllOutput
{
    public function __construct(
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?int $id = null,
        public readonly ?int $idUnitParent = null,
        public readonly ?string $unitParent = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $sortName = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?int $idUnitMerge = null,
        public readonly ?string $unitMerge = null,
        public readonly ?string $registrationNumberMerge = null,
        public readonly ?bool $canRenew = null,
        public readonly ?bool $isUnitCancel = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnitParent: isset($obj->{'ID_UnitParent'}) ? (int) $obj->{'ID_UnitParent'} : null,
            unitParent: isset($obj->{'UnitParent'}) ? (string) $obj->{'UnitParent'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            sortName: isset($obj->{'SortName'}) ? (string) $obj->{'SortName'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idUnitMerge: isset($obj->{'ID_UnitMerge'}) ? (int) $obj->{'ID_UnitMerge'} : null,
            unitMerge: isset($obj->{'UnitMerge'}) ? (string) $obj->{'UnitMerge'} : null,
            registrationNumberMerge: isset($obj->{'RegistrationNumberMerge'}) ? (string) $obj->{'RegistrationNumberMerge'} : null,
            canRenew: isset($obj->{'CanRenew'}) ? (bool) $obj->{'CanRenew'} : null,
            isUnitCancel: isset($obj->{'IsUnitCancel'}) ? (bool) $obj->{'IsUnitCancel'} : null,
        );
    }
}
