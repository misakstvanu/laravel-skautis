<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class UserRoleAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?int $idRole = null,
        public readonly ?string $role = null,
        public readonly ?int $idGroup = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $color = null,
        public readonly ?string $displayName = null,
        public readonly ?string $key = null,
        public readonly ?bool $isActive = null,
        public readonly ?bool $canEdit = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            idRole: isset($obj->{'ID_Role'}) ? (int) $obj->{'ID_Role'} : null,
            role: isset($obj->{'Role'}) ? (string) $obj->{'Role'} : null,
            idGroup: isset($obj->{'ID_Group'}) ? (int) $obj->{'ID_Group'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            color: isset($obj->{'Color'}) ? (string) $obj->{'Color'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            key: isset($obj->{'Key'}) ? (string) $obj->{'Key'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            canEdit: isset($obj->{'CanEdit'}) ? (bool) $obj->{'CanEdit'} : null,
        );
    }
}
