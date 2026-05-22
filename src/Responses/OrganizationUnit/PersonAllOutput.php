<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonAllOutput
{
    public function __construct(
        public readonly ?string $birthday = null,
        public readonly ?int $id = null,
        public readonly ?int $idGroup = null,
        public readonly ?string $displayName = null,
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $nickName = null,
        public readonly ?string $listName = null,
        public readonly ?string $note = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?string $state = null,
        public readonly ?string $postalFirstLine = null,
        public readonly ?string $postalStreet = null,
        public readonly ?string $postalCity = null,
        public readonly ?string $postalPostcode = null,
        public readonly ?string $postalState = null,
        public readonly ?string $idSex = null,
        public readonly ?string $sex = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            birthday: isset($obj->{'Birthday'}) ? (string) $obj->{'Birthday'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGroup: isset($obj->{'ID_Group'}) ? (int) $obj->{'ID_Group'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            firstName: isset($obj->{'FirstName'}) ? (string) $obj->{'FirstName'} : null,
            lastName: isset($obj->{'LastName'}) ? (string) $obj->{'LastName'} : null,
            nickName: isset($obj->{'NickName'}) ? (string) $obj->{'NickName'} : null,
            listName: isset($obj->{'ListName'}) ? (string) $obj->{'ListName'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            postcode: isset($obj->{'Postcode'}) ? (string) $obj->{'Postcode'} : null,
            state: isset($obj->{'State'}) ? (string) $obj->{'State'} : null,
            postalFirstLine: isset($obj->{'PostalFirstLine'}) ? (string) $obj->{'PostalFirstLine'} : null,
            postalStreet: isset($obj->{'PostalStreet'}) ? (string) $obj->{'PostalStreet'} : null,
            postalCity: isset($obj->{'PostalCity'}) ? (string) $obj->{'PostalCity'} : null,
            postalPostcode: isset($obj->{'PostalPostcode'}) ? (string) $obj->{'PostalPostcode'} : null,
            postalState: isset($obj->{'PostalState'}) ? (string) $obj->{'PostalState'} : null,
            idSex: isset($obj->{'ID_Sex'}) ? (string) $obj->{'ID_Sex'} : null,
            sex: isset($obj->{'Sex'}) ? (string) $obj->{'Sex'} : null,
        );
    }
}
