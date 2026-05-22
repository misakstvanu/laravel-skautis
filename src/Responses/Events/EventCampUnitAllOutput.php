<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCampUnitAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventCamp = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventCamp: isset($obj->{'ID_EventCamp'}) ? (int) $obj->{'ID_EventCamp'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
        );
    }
}
