<?php

namespace Misakstvanu\LaravelSkautis\Responses\Insurance;

final class RegistrationAllPostFailedOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $unitName = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $created = null,
        public readonly ?string $note = null,
        public readonly ?int $idPersonRegistered = null,
        public readonly ?string $personRegistered = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            unitName: isset($obj->{'UnitName'}) ? (string) $obj->{'UnitName'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            created: isset($obj->{'Created'}) ? (string) $obj->{'Created'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            idPersonRegistered: isset($obj->{'ID_PersonRegistered'}) ? (int) $obj->{'ID_PersonRegistered'} : null,
            personRegistered: isset($obj->{'PersonRegistered'}) ? (string) $obj->{'PersonRegistered'} : null,
        );
    }
}
