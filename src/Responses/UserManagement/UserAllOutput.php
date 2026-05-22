<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class UserAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $isEnabled = null,
        public readonly ?string $userName = null,
        public readonly ?string $datePasswordChange = null,
        public readonly ?int $incorrectPasswordCount = null,
        public readonly ?string $passwordRequest = null,
        public readonly ?string $passwordRequestTimeout = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $displayName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            isEnabled: isset($obj->{'IsEnabled'}) ? (bool) $obj->{'IsEnabled'} : null,
            userName: isset($obj->{'UserName'}) ? (string) $obj->{'UserName'} : null,
            datePasswordChange: isset($obj->{'DatePasswordChange'}) ? (string) $obj->{'DatePasswordChange'} : null,
            incorrectPasswordCount: isset($obj->{'IncorrectPasswordCount'}) ? (int) $obj->{'IncorrectPasswordCount'} : null,
            passwordRequest: isset($obj->{'PasswordRequest'}) ? (string) $obj->{'PasswordRequest'} : null,
            passwordRequestTimeout: isset($obj->{'PasswordRequestTimeout'}) ? (string) $obj->{'PasswordRequestTimeout'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
        );
    }
}
