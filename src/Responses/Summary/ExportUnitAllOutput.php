<?php

namespace Misakstvanu\LaravelSkautis\Responses\Summary;

final class ExportUnitAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $displayName = null,
        public readonly ?string $listName = null,
        public readonly ?bool $viewDisplayName = null,
        public readonly ?bool $registrationNumber = null,
        public readonly ?bool $isPublic = null,
        public readonly ?int $registrationYear = null,
        public readonly ?bool $filterAligmentType = null,
        public readonly ?bool $filterTroopArt = null,
        public readonly ?bool $filterUnitType = null,
        public readonly ?bool $contact = null,
        public readonly ?bool $address = null,
        public readonly ?bool $street = null,
        public readonly ?bool $city = null,
        public readonly ?bool $postcode = null,
        public readonly ?bool $state = null,
        public readonly ?bool $postalFirstLine = null,
        public readonly ?bool $postalStreet = null,
        public readonly ?bool $postalCity = null,
        public readonly ?bool $postalPostcode = null,
        public readonly ?bool $postalState = null,
        public readonly ?bool $aligmentType = null,
        public readonly ?bool $troopArt = null,
        public readonly ?bool $location = null,
        public readonly ?bool $leaders = null,
        public readonly ?bool $memberCount = null,
        public readonly ?bool $unitType = null,
        public readonly ?bool $iC = null,
        public readonly ?bool $dIC = null,
        public readonly ?int $idUnitFilter = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            listName: isset($obj->{'ListName'}) ? (string) $obj->{'ListName'} : null,
            viewDisplayName: isset($obj->{'ViewDisplayName'}) ? (bool) $obj->{'ViewDisplayName'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (bool) $obj->{'RegistrationNumber'} : null,
            isPublic: isset($obj->{'IsPublic'}) ? (bool) $obj->{'IsPublic'} : null,
            registrationYear: isset($obj->{'RegistrationYear'}) ? (int) $obj->{'RegistrationYear'} : null,
            filterAligmentType: isset($obj->{'FilterAligmentType'}) ? (bool) $obj->{'FilterAligmentType'} : null,
            filterTroopArt: isset($obj->{'FilterTroopArt'}) ? (bool) $obj->{'FilterTroopArt'} : null,
            filterUnitType: isset($obj->{'FilterUnitType'}) ? (bool) $obj->{'FilterUnitType'} : null,
            contact: isset($obj->{'Contact'}) ? (bool) $obj->{'Contact'} : null,
            address: isset($obj->{'Address'}) ? (bool) $obj->{'Address'} : null,
            street: isset($obj->{'Street'}) ? (bool) $obj->{'Street'} : null,
            city: isset($obj->{'City'}) ? (bool) $obj->{'City'} : null,
            postcode: isset($obj->{'Postcode'}) ? (bool) $obj->{'Postcode'} : null,
            state: isset($obj->{'State'}) ? (bool) $obj->{'State'} : null,
            postalFirstLine: isset($obj->{'PostalFirstLine'}) ? (bool) $obj->{'PostalFirstLine'} : null,
            postalStreet: isset($obj->{'PostalStreet'}) ? (bool) $obj->{'PostalStreet'} : null,
            postalCity: isset($obj->{'PostalCity'}) ? (bool) $obj->{'PostalCity'} : null,
            postalPostcode: isset($obj->{'PostalPostcode'}) ? (bool) $obj->{'PostalPostcode'} : null,
            postalState: isset($obj->{'PostalState'}) ? (bool) $obj->{'PostalState'} : null,
            aligmentType: isset($obj->{'AligmentType'}) ? (bool) $obj->{'AligmentType'} : null,
            troopArt: isset($obj->{'TroopArt'}) ? (bool) $obj->{'TroopArt'} : null,
            location: isset($obj->{'Location'}) ? (bool) $obj->{'Location'} : null,
            leaders: isset($obj->{'Leaders'}) ? (bool) $obj->{'Leaders'} : null,
            memberCount: isset($obj->{'MemberCount'}) ? (bool) $obj->{'MemberCount'} : null,
            unitType: isset($obj->{'UnitType'}) ? (bool) $obj->{'UnitType'} : null,
            iC: isset($obj->{'IC'}) ? (bool) $obj->{'IC'} : null,
            dIC: isset($obj->{'DIC'}) ? (bool) $obj->{'DIC'} : null,
            idUnitFilter: isset($obj->{'ID_UnitFilter'}) ? (int) $obj->{'ID_UnitFilter'} : null,
        );
    }
}
