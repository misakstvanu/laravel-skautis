<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class LoginDetailOutput
{
    public function __construct(
        public readonly ?int $idUser = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $civilName = null,
        public readonly ?int $idGroupPerson = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idUnitRole = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?int $idGroupUnit = null,
        public readonly ?int $idUserRole = null,
        public readonly ?int $idGroupLogin = null,
        public readonly ?int $idRole = null,
        public readonly ?string $role = null,
        public readonly ?bool $hadMembership = null,
        public readonly ?string $dateLogout = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            civilName: isset($obj->{'CivilName'}) ? (string) $obj->{'CivilName'} : null,
            idGroupPerson: isset($obj->{'ID_GroupPerson'}) ? (int) $obj->{'ID_GroupPerson'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            idUnitRole: isset($obj->{'ID_UnitRole'}) ? (int) $obj->{'ID_UnitRole'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idGroupUnit: isset($obj->{'ID_GroupUnit'}) ? (int) $obj->{'ID_GroupUnit'} : null,
            idUserRole: isset($obj->{'ID_UserRole'}) ? (int) $obj->{'ID_UserRole'} : null,
            idGroupLogin: isset($obj->{'ID_GroupLogin'}) ? (int) $obj->{'ID_GroupLogin'} : null,
            idRole: isset($obj->{'ID_Role'}) ? (int) $obj->{'ID_Role'} : null,
            role: isset($obj->{'Role'}) ? (string) $obj->{'Role'} : null,
            hadMembership: isset($obj->{'HadMembership'}) ? (bool) $obj->{'HadMembership'} : null,
            dateLogout: isset($obj->{'DateLogout'}) ? (string) $obj->{'DateLogout'} : null,
        );
    }
}
