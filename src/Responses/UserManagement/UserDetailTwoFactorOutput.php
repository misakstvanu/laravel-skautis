<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class UserDetailTwoFactorOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $secret = null,
        public readonly ?string $code = null,
        public readonly ?bool $isTwoFactorEnabled = null,
        public readonly ?bool $isTwoFactorRequired = null,
        public readonly ?string $idTwoFactorType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            secret: isset($obj->{'Secret'}) ? (string) $obj->{'Secret'} : null,
            code: isset($obj->{'Code'}) ? (string) $obj->{'Code'} : null,
            isTwoFactorEnabled: isset($obj->{'IsTwoFactorEnabled'}) ? (bool) $obj->{'IsTwoFactorEnabled'} : null,
            isTwoFactorRequired: isset($obj->{'IsTwoFactorRequired'}) ? (bool) $obj->{'IsTwoFactorRequired'} : null,
            idTwoFactorType: isset($obj->{'ID_TwoFactorType'}) ? (string) $obj->{'ID_TwoFactorType'} : null,
        );
    }
}
