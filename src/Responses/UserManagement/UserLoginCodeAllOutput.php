<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class UserLoginCodeAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?string $code = null,
        public readonly ?string $created = null,
        public readonly ?string $used = null,
        public readonly ?bool $isValid = null,
        public readonly ?bool $isActive = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            code: isset($obj->{'Code'}) ? (string) $obj->{'Code'} : null,
            created: isset($obj->{'Created'}) ? (string) $obj->{'Created'} : null,
            used: isset($obj->{'Used'}) ? (string) $obj->{'Used'} : null,
            isValid: isset($obj->{'IsValid'}) ? (bool) $obj->{'IsValid'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
        );
    }
}
