<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class CatalogDisplayDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?bool $birthday = null,
        public readonly ?bool $yearFrom = null,
        public readonly ?bool $adress = null,
        public readonly ?bool $postalAdress = null,
        public readonly ?bool $school = null,
        public readonly ?bool $function_ = null,
        public readonly ?bool $qualification = null,
        public readonly ?bool $educationSeminary = null,
        public readonly ?bool $offer = null,
        public readonly ?bool $education = null,
        public readonly ?bool $membership = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            birthday: isset($obj->{'Birthday'}) ? (bool) $obj->{'Birthday'} : null,
            yearFrom: isset($obj->{'YearFrom'}) ? (bool) $obj->{'YearFrom'} : null,
            adress: isset($obj->{'Adress'}) ? (bool) $obj->{'Adress'} : null,
            postalAdress: isset($obj->{'PostalAdress'}) ? (bool) $obj->{'PostalAdress'} : null,
            school: isset($obj->{'School'}) ? (bool) $obj->{'School'} : null,
            function_: isset($obj->{'Function'}) ? (bool) $obj->{'Function'} : null,
            qualification: isset($obj->{'Qualification'}) ? (bool) $obj->{'Qualification'} : null,
            educationSeminary: isset($obj->{'EducationSeminary'}) ? (bool) $obj->{'EducationSeminary'} : null,
            offer: isset($obj->{'Offer'}) ? (bool) $obj->{'Offer'} : null,
            education: isset($obj->{'Education'}) ? (bool) $obj->{'Education'} : null,
            membership: isset($obj->{'Membership'}) ? (bool) $obj->{'Membership'} : null,
        );
    }
}
