<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitDetailRegistryOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $iC = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?string $state = null,
        public readonly ?string $postalFirstLine = null,
        public readonly ?string $postalStreet = null,
        public readonly ?string $postalCity = null,
        public readonly ?string $postalPostcode = null,
        public readonly ?string $postalState = null,
        public readonly ?int $idUnitParent = null,
        public readonly ?string $unitParent = null,
        public readonly ?string $parentRegistrationNumber = null,
        public readonly ?string $dateFrom = null,
        public readonly ?string $dateTo = null,
        public readonly ?string $dIC = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            iC: isset($obj->{'IC'}) ? (string) $obj->{'IC'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            postcode: isset($obj->{'Postcode'}) ? (string) $obj->{'Postcode'} : null,
            state: isset($obj->{'State'}) ? (string) $obj->{'State'} : null,
            postalFirstLine: isset($obj->{'PostalFirstLine'}) ? (string) $obj->{'PostalFirstLine'} : null,
            postalStreet: isset($obj->{'PostalStreet'}) ? (string) $obj->{'PostalStreet'} : null,
            postalCity: isset($obj->{'PostalCity'}) ? (string) $obj->{'PostalCity'} : null,
            postalPostcode: isset($obj->{'PostalPostcode'}) ? (string) $obj->{'PostalPostcode'} : null,
            postalState: isset($obj->{'PostalState'}) ? (string) $obj->{'PostalState'} : null,
            idUnitParent: isset($obj->{'ID_UnitParent'}) ? (int) $obj->{'ID_UnitParent'} : null,
            unitParent: isset($obj->{'UnitParent'}) ? (string) $obj->{'UnitParent'} : null,
            parentRegistrationNumber: isset($obj->{'ParentRegistrationNumber'}) ? (string) $obj->{'ParentRegistrationNumber'} : null,
            dateFrom: isset($obj->{'DateFrom'}) ? (string) $obj->{'DateFrom'} : null,
            dateTo: isset($obj->{'DateTo'}) ? (string) $obj->{'DateTo'} : null,
            dIC: isset($obj->{'DIC'}) ? (string) $obj->{'DIC'} : null,
        );
    }
}
