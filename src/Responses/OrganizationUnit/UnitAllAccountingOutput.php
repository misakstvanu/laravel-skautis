<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitAllAccountingOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $unitType = null,
        public readonly ?string $displayName = null,
        public readonly ?string $sortName = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $shortRegistrationNumber = null,
        public readonly ?string $iC = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?string $fullDisplayName = null,
        public readonly ?string $email = null,
        public readonly ?string $phone = null,
        public readonly ?string $accountPrefix = null,
        public readonly ?string $accountNumber = null,
        public readonly ?string $accountBank = null,
        public readonly ?string $account = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnitType: isset($obj->{'ID_UnitType'}) ? (string) $obj->{'ID_UnitType'} : null,
            unitType: isset($obj->{'UnitType'}) ? (string) $obj->{'UnitType'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            sortName: isset($obj->{'SortName'}) ? (string) $obj->{'SortName'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            shortRegistrationNumber: isset($obj->{'ShortRegistrationNumber'}) ? (string) $obj->{'ShortRegistrationNumber'} : null,
            iC: isset($obj->{'IC'}) ? (string) $obj->{'IC'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            postcode: isset($obj->{'Postcode'}) ? (string) $obj->{'Postcode'} : null,
            fullDisplayName: isset($obj->{'FullDisplayName'}) ? (string) $obj->{'FullDisplayName'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            phone: isset($obj->{'Phone'}) ? (string) $obj->{'Phone'} : null,
            accountPrefix: isset($obj->{'AccountPrefix'}) ? (string) $obj->{'AccountPrefix'} : null,
            accountNumber: isset($obj->{'AccountNumber'}) ? (string) $obj->{'AccountNumber'} : null,
            accountBank: isset($obj->{'AccountBank'}) ? (string) $obj->{'AccountBank'} : null,
            account: isset($obj->{'Account'}) ? (string) $obj->{'Account'} : null,
        );
    }
}
