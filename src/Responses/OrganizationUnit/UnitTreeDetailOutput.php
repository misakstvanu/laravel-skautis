<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitTreeDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?string $idUnitTreeReason = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?int $idUnitParent = null,
        public readonly ?string $unitParent = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $idUnitType = null,
        public readonly ?int $idUnitMerge = null,
        public readonly ?string $unitMerge = null,
        public readonly ?string $idUnitFoundReason = null,
        public readonly ?string $unitFoundReason = null,
        public readonly ?string $unitFoundDescription = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            idUnitTreeReason: isset($obj->{'ID_UnitTreeReason'}) ? (string) $obj->{'ID_UnitTreeReason'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            idUnitParent: isset($obj->{'ID_UnitParent'}) ? (int) $obj->{'ID_UnitParent'} : null,
            unitParent: isset($obj->{'UnitParent'}) ? (string) $obj->{'UnitParent'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idUnitType: isset($obj->{'ID_UnitType'}) ? (string) $obj->{'ID_UnitType'} : null,
            idUnitMerge: isset($obj->{'ID_UnitMerge'}) ? (int) $obj->{'ID_UnitMerge'} : null,
            unitMerge: isset($obj->{'UnitMerge'}) ? (string) $obj->{'UnitMerge'} : null,
            idUnitFoundReason: isset($obj->{'ID_UnitFoundReason'}) ? (string) $obj->{'ID_UnitFoundReason'} : null,
            unitFoundReason: isset($obj->{'UnitFoundReason'}) ? (string) $obj->{'UnitFoundReason'} : null,
            unitFoundDescription: isset($obj->{'UnitFoundDescription'}) ? (string) $obj->{'UnitFoundDescription'} : null,
        );
    }
}
