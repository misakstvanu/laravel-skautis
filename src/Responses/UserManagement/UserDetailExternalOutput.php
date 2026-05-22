<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class UserDetailExternalOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $userName = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $nickName = null,
        public readonly ?string $birthday = null,
        public readonly ?string $email = null,
        public readonly ?string $phone = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postCode = null,
        public readonly ?string $bank = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            userName: isset($obj->{'UserName'}) ? (string) $obj->{'UserName'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            firstName: isset($obj->{'FirstName'}) ? (string) $obj->{'FirstName'} : null,
            lastName: isset($obj->{'LastName'}) ? (string) $obj->{'LastName'} : null,
            nickName: isset($obj->{'NickName'}) ? (string) $obj->{'NickName'} : null,
            birthday: isset($obj->{'Birthday'}) ? (string) $obj->{'Birthday'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            phone: isset($obj->{'Phone'}) ? (string) $obj->{'Phone'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            postCode: isset($obj->{'PostCode'}) ? (string) $obj->{'PostCode'} : null,
            bank: isset($obj->{'Bank'}) ? (string) $obj->{'Bank'} : null,
        );
    }
}
