<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitAllTelephonyOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGroup = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $unitType = null,
        public readonly ?string $displayName = null,
        public readonly ?string $sortName = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $shortRegistrationNumber = null,
        public readonly ?string $location = null,
        public readonly ?string $iC = null,
        public readonly ?string $dIC = null,
        public readonly ?string $street = null,
        public readonly ?string $postalState = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?string $state = null,
        public readonly ?string $postalFirstLine = null,
        public readonly ?string $postalStreet = null,
        public readonly ?string $postalCity = null,
        public readonly ?string $postalPostcode = null,
        public readonly ?string $note = null,
        public readonly ?string $fullDisplayName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGroup: isset($obj->{'ID_Group'}) ? (int) $obj->{'ID_Group'} : null,
            idUnitType: isset($obj->{'ID_UnitType'}) ? (string) $obj->{'ID_UnitType'} : null,
            unitType: isset($obj->{'UnitType'}) ? (string) $obj->{'UnitType'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            sortName: isset($obj->{'SortName'}) ? (string) $obj->{'SortName'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            shortRegistrationNumber: isset($obj->{'ShortRegistrationNumber'}) ? (string) $obj->{'ShortRegistrationNumber'} : null,
            location: isset($obj->{'Location'}) ? (string) $obj->{'Location'} : null,
            iC: isset($obj->{'IC'}) ? (string) $obj->{'IC'} : null,
            dIC: isset($obj->{'DIC'}) ? (string) $obj->{'DIC'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            postalState: isset($obj->{'PostalState'}) ? (string) $obj->{'PostalState'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            postcode: isset($obj->{'Postcode'}) ? (string) $obj->{'Postcode'} : null,
            state: isset($obj->{'State'}) ? (string) $obj->{'State'} : null,
            postalFirstLine: isset($obj->{'PostalFirstLine'}) ? (string) $obj->{'PostalFirstLine'} : null,
            postalStreet: isset($obj->{'PostalStreet'}) ? (string) $obj->{'PostalStreet'} : null,
            postalCity: isset($obj->{'PostalCity'}) ? (string) $obj->{'PostalCity'} : null,
            postalPostcode: isset($obj->{'PostalPostcode'}) ? (string) $obj->{'PostalPostcode'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            fullDisplayName: isset($obj->{'FullDisplayName'}) ? (string) $obj->{'FullDisplayName'} : null,
        );
    }
}
