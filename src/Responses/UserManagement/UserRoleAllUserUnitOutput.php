<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class UserRoleAllUserUnitOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idRole = null,
        public readonly ?string $role = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idRole: isset($obj->{'ID_Role'}) ? (int) $obj->{'ID_Role'} : null,
            role: isset($obj->{'Role'}) ? (string) $obj->{'Role'} : null,
        );
    }
}
