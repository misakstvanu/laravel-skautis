<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class RegistryDetailExportOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $year = null,
        public readonly ?string $unitFullName = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?string $state = null,
        public readonly ?string $dateFileCreated = null,
        public readonly ?string $dateConfirmed = null,
        public readonly ?string $iC = null,
        public readonly ?string $fileReference = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $dateCreatedStatement = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            unitFullName: isset($obj->{'UnitFullName'}) ? (string) $obj->{'UnitFullName'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            postcode: isset($obj->{'Postcode'}) ? (string) $obj->{'Postcode'} : null,
            state: isset($obj->{'State'}) ? (string) $obj->{'State'} : null,
            dateFileCreated: isset($obj->{'DateFileCreated'}) ? (string) $obj->{'DateFileCreated'} : null,
            dateConfirmed: isset($obj->{'DateConfirmed'}) ? (string) $obj->{'DateConfirmed'} : null,
            iC: isset($obj->{'IC'}) ? (string) $obj->{'IC'} : null,
            fileReference: isset($obj->{'FileReference'}) ? (string) $obj->{'FileReference'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            dateCreatedStatement: isset($obj->{'DateCreatedStatement'}) ? (string) $obj->{'DateCreatedStatement'} : null,
        );
    }
}
