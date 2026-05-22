<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCongressDetailSimplifiedOutput
{
    public function __construct(
        public readonly ?string $idUnitType = null,
        public readonly ?string $unitType = null,
        public readonly ?string $idEventCongressType = null,
        public readonly ?string $eventCongressType = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $unitRegistrationNumber = null,
        public readonly ?string $unitStreet = null,
        public readonly ?string $unitCity = null,
        public readonly ?string $unitPostcode = null,
        public readonly ?string $unitIC = null,
        public readonly ?string $date = null,
        public readonly ?string $time = null,
        public readonly ?string $location = null,
        public readonly ?int $delegateCount = null,
        public readonly ?string $leader = null,
        public readonly ?string $leaderFunction = null,
        public readonly ?string $unitTypeNominative = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idUnitType: isset($obj->{'ID_UnitType'}) ? (string) $obj->{'ID_UnitType'} : null,
            unitType: isset($obj->{'UnitType'}) ? (string) $obj->{'UnitType'} : null,
            idEventCongressType: isset($obj->{'ID_EventCongressType'}) ? (string) $obj->{'ID_EventCongressType'} : null,
            eventCongressType: isset($obj->{'EventCongressType'}) ? (string) $obj->{'EventCongressType'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            unitRegistrationNumber: isset($obj->{'UnitRegistrationNumber'}) ? (string) $obj->{'UnitRegistrationNumber'} : null,
            unitStreet: isset($obj->{'UnitStreet'}) ? (string) $obj->{'UnitStreet'} : null,
            unitCity: isset($obj->{'UnitCity'}) ? (string) $obj->{'UnitCity'} : null,
            unitPostcode: isset($obj->{'UnitPostcode'}) ? (string) $obj->{'UnitPostcode'} : null,
            unitIC: isset($obj->{'UnitIC'}) ? (string) $obj->{'UnitIC'} : null,
            date: isset($obj->{'Date'}) ? (string) $obj->{'Date'} : null,
            time: isset($obj->{'Time'}) ? (string) $obj->{'Time'} : null,
            location: isset($obj->{'Location'}) ? (string) $obj->{'Location'} : null,
            delegateCount: isset($obj->{'DelegateCount'}) ? (int) $obj->{'DelegateCount'} : null,
            leader: isset($obj->{'Leader'}) ? (string) $obj->{'Leader'} : null,
            leaderFunction: isset($obj->{'LeaderFunction'}) ? (string) $obj->{'LeaderFunction'} : null,
            unitTypeNominative: isset($obj->{'UnitTypeNominative'}) ? (string) $obj->{'UnitTypeNominative'} : null,
        );
    }
}
