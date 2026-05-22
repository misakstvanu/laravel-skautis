<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class UserDetailOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $isActive = null,
        public readonly ?bool $isEnabled = null,
        public readonly ?bool $isExperimental = null,
        public readonly ?bool $isDebug = null,
        public readonly ?string $userName = null,
        public readonly ?string $datePasswordChange = null,
        public readonly ?int $incorrectPasswordCount = null,
        public readonly ?string $passwordRequest = null,
        public readonly ?string $passwordRequestTimeout = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $securityCode = null,
        public readonly ?bool $hasMembership = null,
        public readonly ?int $idUserAuthentication = null,
        public readonly ?bool $isAuthenticated = null,
        public readonly ?int $favoriteLimit = null,
        public readonly ?bool $isTwoFactorEnabled = null,
        public readonly ?string $twoFactorEnabled = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            isEnabled: isset($obj->{'IsEnabled'}) ? (bool) $obj->{'IsEnabled'} : null,
            isExperimental: isset($obj->{'IsExperimental'}) ? (bool) $obj->{'IsExperimental'} : null,
            isDebug: isset($obj->{'IsDebug'}) ? (bool) $obj->{'IsDebug'} : null,
            userName: isset($obj->{'UserName'}) ? (string) $obj->{'UserName'} : null,
            datePasswordChange: isset($obj->{'DatePasswordChange'}) ? (string) $obj->{'DatePasswordChange'} : null,
            incorrectPasswordCount: isset($obj->{'IncorrectPasswordCount'}) ? (int) $obj->{'IncorrectPasswordCount'} : null,
            passwordRequest: isset($obj->{'PasswordRequest'}) ? (string) $obj->{'PasswordRequest'} : null,
            passwordRequestTimeout: isset($obj->{'PasswordRequestTimeout'}) ? (string) $obj->{'PasswordRequestTimeout'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            securityCode: isset($obj->{'SecurityCode'}) ? (string) $obj->{'SecurityCode'} : null,
            hasMembership: isset($obj->{'HasMembership'}) ? (bool) $obj->{'HasMembership'} : null,
            idUserAuthentication: isset($obj->{'ID_UserAuthentication'}) ? (int) $obj->{'ID_UserAuthentication'} : null,
            isAuthenticated: isset($obj->{'IsAuthenticated'}) ? (bool) $obj->{'IsAuthenticated'} : null,
            favoriteLimit: isset($obj->{'FavoriteLimit'}) ? (int) $obj->{'FavoriteLimit'} : null,
            isTwoFactorEnabled: isset($obj->{'IsTwoFactorEnabled'}) ? (bool) $obj->{'IsTwoFactorEnabled'} : null,
            twoFactorEnabled: isset($obj->{'TwoFactorEnabled'}) ? (string) $obj->{'TwoFactorEnabled'} : null,
        );
    }
}
