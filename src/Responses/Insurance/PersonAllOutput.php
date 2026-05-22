<?php

namespace Misakstvanu\LaravelSkautis\Responses\Insurance;

final class PersonAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $unitWithRegistrationNumber = null,
        public readonly ?int $year = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?string $note = null,
        public readonly ?float $amount = null,
        public readonly ?bool $isAutoInsured = null,
        public readonly ?string $birthday = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            unitWithRegistrationNumber: isset($obj->{'UnitWithRegistrationNumber'}) ? (string) $obj->{'UnitWithRegistrationNumber'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            amount: isset($obj->{'Amount'}) ? (float) $obj->{'Amount'} : null,
            isAutoInsured: isset($obj->{'IsAutoInsured'}) ? (bool) $obj->{'IsAutoInsured'} : null,
            birthday: isset($obj->{'Birthday'}) ? (string) $obj->{'Birthday'} : null,
        );
    }
}
