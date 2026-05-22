<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class LoginUpdateTwoFactorOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?bool $isValid = null,
        public readonly ?string $token = null,
        public readonly ?string $code = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            isValid: isset($obj->{'IsValid'}) ? (bool) $obj->{'IsValid'} : null,
            token: isset($obj->{'Token'}) ? (string) $obj->{'Token'} : null,
            code: isset($obj->{'Code'}) ? (string) $obj->{'Code'} : null,
        );
    }
}
