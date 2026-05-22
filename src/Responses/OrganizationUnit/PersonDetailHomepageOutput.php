<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonDetailHomepageOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $nickName = null,
        public readonly ?string $idSex = null,
        public readonly ?string $sex = null,
        public readonly ?int $totalFavorite = null,
        public readonly ?int $totalWebMessage = null,
        public readonly ?int $totalWebMessageUnreaded = null,
        public readonly ?string $lastLoginDate = null,
        public readonly ?string $photoExtension = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            firstName: isset($obj->{'FirstName'}) ? (string) $obj->{'FirstName'} : null,
            lastName: isset($obj->{'LastName'}) ? (string) $obj->{'LastName'} : null,
            nickName: isset($obj->{'NickName'}) ? (string) $obj->{'NickName'} : null,
            idSex: isset($obj->{'ID_Sex'}) ? (string) $obj->{'ID_Sex'} : null,
            sex: isset($obj->{'Sex'}) ? (string) $obj->{'Sex'} : null,
            totalFavorite: isset($obj->{'TotalFavorite'}) ? (int) $obj->{'TotalFavorite'} : null,
            totalWebMessage: isset($obj->{'TotalWebMessage'}) ? (int) $obj->{'TotalWebMessage'} : null,
            totalWebMessageUnreaded: isset($obj->{'TotalWebMessageUnreaded'}) ? (int) $obj->{'TotalWebMessageUnreaded'} : null,
            lastLoginDate: isset($obj->{'LastLoginDate'}) ? (string) $obj->{'LastLoginDate'} : null,
            photoExtension: isset($obj->{'PhotoExtension'}) ? (string) $obj->{'PhotoExtension'} : null,
        );
    }
}
