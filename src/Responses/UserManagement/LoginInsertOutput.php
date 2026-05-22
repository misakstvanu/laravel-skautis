<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class LoginInsertOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?int $idUserRole = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $idPersistentLogin = null,
        public readonly ?string $dateLogout = null,
        public readonly ?bool $authenticated = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            idUserRole: isset($obj->{'ID_UserRole'}) ? (int) $obj->{'ID_UserRole'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            idPersistentLogin: isset($obj->{'ID_PersistentLogin'}) ? (string) $obj->{'ID_PersistentLogin'} : null,
            dateLogout: isset($obj->{'DateLogout'}) ? (string) $obj->{'DateLogout'} : null,
            authenticated: isset($obj->{'Authenticated'}) ? (bool) $obj->{'Authenticated'} : null,
        );
    }
}
