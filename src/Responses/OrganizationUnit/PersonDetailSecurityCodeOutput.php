<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonDetailSecurityCodeOutput
{
    public function __construct(
        public readonly ?string $identificationCode = null,
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $nickName = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?string $state = null,
        public readonly ?string $postalFirstLine = null,
        public readonly ?string $postalStreet = null,
        public readonly ?string $postalCity = null,
        public readonly ?string $postalPostcode = null,
        public readonly ?string $postalState = null,
        public readonly ?string $email = null,
        public readonly ?string $phone = null,
        public readonly ?string $phoneXhtmlDisplay = null,
        public readonly ?string $phoneValidation = null,
        public readonly ?bool $isBlank = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            identificationCode: isset($obj->{'IdentificationCode'}) ? (string) $obj->{'IdentificationCode'} : null,
            firstName: isset($obj->{'FirstName'}) ? (string) $obj->{'FirstName'} : null,
            lastName: isset($obj->{'LastName'}) ? (string) $obj->{'LastName'} : null,
            nickName: isset($obj->{'NickName'}) ? (string) $obj->{'NickName'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            postcode: isset($obj->{'Postcode'}) ? (string) $obj->{'Postcode'} : null,
            state: isset($obj->{'State'}) ? (string) $obj->{'State'} : null,
            postalFirstLine: isset($obj->{'PostalFirstLine'}) ? (string) $obj->{'PostalFirstLine'} : null,
            postalStreet: isset($obj->{'PostalStreet'}) ? (string) $obj->{'PostalStreet'} : null,
            postalCity: isset($obj->{'PostalCity'}) ? (string) $obj->{'PostalCity'} : null,
            postalPostcode: isset($obj->{'PostalPostcode'}) ? (string) $obj->{'PostalPostcode'} : null,
            postalState: isset($obj->{'PostalState'}) ? (string) $obj->{'PostalState'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            phone: isset($obj->{'Phone'}) ? (string) $obj->{'Phone'} : null,
            phoneXhtmlDisplay: isset($obj->{'PhoneXhtmlDisplay'}) ? (string) $obj->{'PhoneXhtmlDisplay'} : null,
            phoneValidation: isset($obj->{'PhoneValidation'}) ? (string) $obj->{'PhoneValidation'} : null,
            isBlank: isset($obj->{'IsBlank'}) ? (bool) $obj->{'IsBlank'} : null,
        );
    }
}
