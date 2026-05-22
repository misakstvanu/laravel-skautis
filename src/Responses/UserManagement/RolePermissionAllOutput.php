<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class RolePermissionAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idRole = null,
        public readonly ?string $idPermission = null,
        public readonly ?string $permission = null,
        public readonly ?bool $isHierarchic = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idRole: isset($obj->{'ID_Role'}) ? (int) $obj->{'ID_Role'} : null,
            idPermission: isset($obj->{'ID_Permission'}) ? (string) $obj->{'ID_Permission'} : null,
            permission: isset($obj->{'Permission'}) ? (string) $obj->{'Permission'} : null,
            isHierarchic: isset($obj->{'IsHierarchic'}) ? (bool) $obj->{'IsHierarchic'} : null,
        );
    }
}
