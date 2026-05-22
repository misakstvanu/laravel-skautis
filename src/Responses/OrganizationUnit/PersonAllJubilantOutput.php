<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonAllJubilantOutput
{
    public function __construct(
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $degreeInFrontOf = null,
        public readonly ?string $degreeBehind = null,
        public readonly ?string $nickName = null,
        public readonly ?string $birthday = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?string $state = null,
        public readonly ?string $postalFirstLine = null,
        public readonly ?string $idSex = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            firstName: isset($obj->{'FirstName'}) ? (string) $obj->{'FirstName'} : null,
            lastName: isset($obj->{'LastName'}) ? (string) $obj->{'LastName'} : null,
            degreeInFrontOf: isset($obj->{'DegreeInFrontOf'}) ? (string) $obj->{'DegreeInFrontOf'} : null,
            degreeBehind: isset($obj->{'DegreeBehind'}) ? (string) $obj->{'DegreeBehind'} : null,
            nickName: isset($obj->{'NickName'}) ? (string) $obj->{'NickName'} : null,
            birthday: isset($obj->{'Birthday'}) ? (string) $obj->{'Birthday'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            postcode: isset($obj->{'Postcode'}) ? (string) $obj->{'Postcode'} : null,
            state: isset($obj->{'State'}) ? (string) $obj->{'State'} : null,
            postalFirstLine: isset($obj->{'PostalFirstLine'}) ? (string) $obj->{'PostalFirstLine'} : null,
            idSex: isset($obj->{'ID_Sex'}) ? (string) $obj->{'ID_Sex'} : null,
        );
    }
}
