<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class UserAuthenticationDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?string $dateCreate = null,
        public readonly ?string $idUserAuthenticationType = null,
        public readonly ?string $userAuthenticationType = null,
        public readonly ?string $idUserAuthenticationState = null,
        public readonly ?string $userAuthenticationState = null,
        public readonly ?string $code = null,
        public readonly ?string $number = null,
        public readonly ?int $idUserAuthenticated = null,
        public readonly ?string $dateAuthenticated = null,
        public readonly ?string $content = null,
        public readonly ?string $formExtension = null,
        public readonly ?string $formContent = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            dateCreate: isset($obj->{'DateCreate'}) ? (string) $obj->{'DateCreate'} : null,
            idUserAuthenticationType: isset($obj->{'ID_UserAuthenticationType'}) ? (string) $obj->{'ID_UserAuthenticationType'} : null,
            userAuthenticationType: isset($obj->{'UserAuthenticationType'}) ? (string) $obj->{'UserAuthenticationType'} : null,
            idUserAuthenticationState: isset($obj->{'ID_UserAuthenticationState'}) ? (string) $obj->{'ID_UserAuthenticationState'} : null,
            userAuthenticationState: isset($obj->{'UserAuthenticationState'}) ? (string) $obj->{'UserAuthenticationState'} : null,
            code: isset($obj->{'Code'}) ? (string) $obj->{'Code'} : null,
            number: isset($obj->{'Number'}) ? (string) $obj->{'Number'} : null,
            idUserAuthenticated: isset($obj->{'ID_UserAuthenticated'}) ? (int) $obj->{'ID_UserAuthenticated'} : null,
            dateAuthenticated: isset($obj->{'DateAuthenticated'}) ? (string) $obj->{'DateAuthenticated'} : null,
            content: isset($obj->{'Content'}) ? (string) $obj->{'Content'} : null,
            formExtension: isset($obj->{'FormExtension'}) ? (string) $obj->{'FormExtension'} : null,
            formContent: isset($obj->{'FormContent'}) ? (string) $obj->{'FormContent'} : null,
        );
    }
}
