<?php

namespace Misakstvanu\LaravelSkautis\Responses\Exports;

final class ExportFunctionEndAllOutput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $unitRegistrationNumber = null,
        public readonly ?string $unit = null,
        public readonly ?string $functionValidFrom = null,
        public readonly ?string $functionValidTo = null,
        public readonly ?string $sex = null,
        public readonly ?string $nickName = null,
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $city = null,
        public readonly ?string $street = null,
        public readonly ?string $postcode = null,
        public readonly ?string $email = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            unitRegistrationNumber: isset($obj->{'UnitRegistrationNumber'}) ? (string) $obj->{'UnitRegistrationNumber'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            functionValidFrom: isset($obj->{'FunctionValidFrom'}) ? (string) $obj->{'FunctionValidFrom'} : null,
            functionValidTo: isset($obj->{'FunctionValidTo'}) ? (string) $obj->{'FunctionValidTo'} : null,
            sex: isset($obj->{'Sex'}) ? (string) $obj->{'Sex'} : null,
            nickName: isset($obj->{'NickName'}) ? (string) $obj->{'NickName'} : null,
            firstName: isset($obj->{'FirstName'}) ? (string) $obj->{'FirstName'} : null,
            lastName: isset($obj->{'LastName'}) ? (string) $obj->{'LastName'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            postcode: isset($obj->{'Postcode'}) ? (string) $obj->{'Postcode'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
        );
    }
}
