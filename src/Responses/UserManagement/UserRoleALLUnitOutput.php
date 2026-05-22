<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class UserRoleALLUnitOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idRole = null,
        public readonly ?string $role = null,
        public readonly ?string $color = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idRole: isset($obj->{'ID_Role'}) ? (int) $obj->{'ID_Role'} : null,
            role: isset($obj->{'Role'}) ? (string) $obj->{'Role'} : null,
            color: isset($obj->{'Color'}) ? (string) $obj->{'Color'} : null,
        );
    }
}
