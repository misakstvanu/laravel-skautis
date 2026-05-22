<?php

namespace Misakstvanu\LaravelSkautis\Requests\Summary;

final class ExportUnitCloneInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $displayName = null,
        public readonly ?int $registrationYear = null,
        public readonly ?bool $contact = null,
        public readonly ?bool $aligmentType = null,
        public readonly ?bool $leaders = null,
        public readonly ?bool $location = null,
        public readonly ?bool $address = null,
        public readonly ?bool $viewDisplayName = null,
        public readonly ?bool $registrationNumber = null,
        public readonly ?bool $street = null,
        public readonly ?bool $city = null,
        public readonly ?bool $postcode = null,
        public readonly ?bool $state = null,
        public readonly ?bool $postalFirstLine = null,
        public readonly ?bool $postalStreet = null,
        public readonly ?bool $postalCity = null,
        public readonly ?bool $postalPostcode = null,
        public readonly ?bool $postalState = null,
        public readonly ?bool $iC = null,
        public readonly ?bool $dIC = null,
        public readonly ?int $idUnitFilter = null,
        public readonly ?bool $troopArt = null,
        public readonly ?bool $memberCount = null,
        public readonly ?bool $unitType = null,
        public readonly ?bool $filterAligmentType = null,
        public readonly ?int $int = null,
        public readonly ?bool $filterTroopArt = null,
        public readonly ?string $string = null,
        public readonly ?bool $filterUnitType = null,
        public readonly ?bool $isPublic = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'DisplayName' => $this->displayName,
            'RegistrationYear' => $this->registrationYear,
            'Contact' => $this->contact,
            'AligmentType' => $this->aligmentType,
            'Leaders' => $this->leaders,
            'Location' => $this->location,
            'Address' => $this->address,
            'ViewDisplayName' => $this->viewDisplayName,
            'RegistrationNumber' => $this->registrationNumber,
            'Street' => $this->street,
            'City' => $this->city,
            'Postcode' => $this->postcode,
            'State' => $this->state,
            'PostalFirstLine' => $this->postalFirstLine,
            'PostalStreet' => $this->postalStreet,
            'PostalCity' => $this->postalCity,
            'PostalPostcode' => $this->postalPostcode,
            'PostalState' => $this->postalState,
            'IC' => $this->iC,
            'DIC' => $this->dIC,
            'ID_UnitFilter' => $this->idUnitFilter,
            'TroopArt' => $this->troopArt,
            'MemberCount' => $this->memberCount,
            'UnitType' => $this->unitType,
            'FilterAligmentType' => $this->filterAligmentType,
            'int' => $this->int,
            'FilterTroopArt' => $this->filterTroopArt,
            'string' => $this->string,
            'FilterUnitType' => $this->filterUnitType,
            'IsPublic' => $this->isPublic,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
