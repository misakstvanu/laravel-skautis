<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitAllUnitOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $displayName = null,
        public readonly ?string $sortName = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?int $idUnitParent = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnitType: isset($obj->{'ID_UnitType'}) ? (string) $obj->{'ID_UnitType'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            sortName: isset($obj->{'SortName'}) ? (string) $obj->{'SortName'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idUnitParent: isset($obj->{'ID_UnitParent'}) ? (int) $obj->{'ID_UnitParent'} : null,
        );
    }
}
