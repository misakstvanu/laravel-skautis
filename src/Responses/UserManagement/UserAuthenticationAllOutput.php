<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class UserAuthenticationAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $dateCreate = null,
        public readonly ?string $idUserAuthenticationType = null,
        public readonly ?string $userAuthenticationType = null,
        public readonly ?string $idUserAuthenticationState = null,
        public readonly ?string $userAuthenticationState = null,
        public readonly ?string $code = null,
        public readonly ?int $idFunction = null,
        public readonly ?int $idFunctionType = null,
        public readonly ?string $functionType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            dateCreate: isset($obj->{'DateCreate'}) ? (string) $obj->{'DateCreate'} : null,
            idUserAuthenticationType: isset($obj->{'ID_UserAuthenticationType'}) ? (string) $obj->{'ID_UserAuthenticationType'} : null,
            userAuthenticationType: isset($obj->{'UserAuthenticationType'}) ? (string) $obj->{'UserAuthenticationType'} : null,
            idUserAuthenticationState: isset($obj->{'ID_UserAuthenticationState'}) ? (string) $obj->{'ID_UserAuthenticationState'} : null,
            userAuthenticationState: isset($obj->{'UserAuthenticationState'}) ? (string) $obj->{'UserAuthenticationState'} : null,
            code: isset($obj->{'Code'}) ? (string) $obj->{'Code'} : null,
            idFunction: isset($obj->{'ID_Function'}) ? (int) $obj->{'ID_Function'} : null,
            idFunctionType: isset($obj->{'ID_FunctionType'}) ? (int) $obj->{'ID_FunctionType'} : null,
            functionType: isset($obj->{'FunctionType'}) ? (string) $obj->{'FunctionType'} : null,
        );
    }
}
