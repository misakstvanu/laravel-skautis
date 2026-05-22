<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class UserLoginDeviceAllOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?string $token = null,
        public readonly ?string $created = null,
        public readonly ?string $validTo = null,
        public readonly ?int $idUser = null,
        public readonly ?bool $isValid = null,
        public readonly ?string $browser = null,
        public readonly ?string $system = null,
        public readonly ?bool $isMobile = null,
        public readonly ?string $userAgent = null,
        public readonly ?string $displayName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            token: isset($obj->{'Token'}) ? (string) $obj->{'Token'} : null,
            created: isset($obj->{'Created'}) ? (string) $obj->{'Created'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            isValid: isset($obj->{'IsValid'}) ? (bool) $obj->{'IsValid'} : null,
            browser: isset($obj->{'Browser'}) ? (string) $obj->{'Browser'} : null,
            system: isset($obj->{'System'}) ? (string) $obj->{'System'} : null,
            isMobile: isset($obj->{'IsMobile'}) ? (bool) $obj->{'IsMobile'} : null,
            userAgent: isset($obj->{'UserAgent'}) ? (string) $obj->{'UserAgent'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
        );
    }
}
