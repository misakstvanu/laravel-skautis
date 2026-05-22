<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class LoginDetailTwoFactorOutput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $nickName = null,
        public readonly ?string $civilName = null,
        public readonly ?int $idPersonPhotoSmall = null,
        public readonly ?string $idTwoFactorType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            nickName: isset($obj->{'NickName'}) ? (string) $obj->{'NickName'} : null,
            civilName: isset($obj->{'CivilName'}) ? (string) $obj->{'CivilName'} : null,
            idPersonPhotoSmall: isset($obj->{'ID_PersonPhotoSmall'}) ? (int) $obj->{'ID_PersonPhotoSmall'} : null,
            idTwoFactorType: isset($obj->{'ID_TwoFactorType'}) ? (string) $obj->{'ID_TwoFactorType'} : null,
        );
    }
}
