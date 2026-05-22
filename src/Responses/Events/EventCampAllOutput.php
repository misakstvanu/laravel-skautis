<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCampAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $startDate = null,
        public readonly ?string $endDate = null,
        public readonly ?string $location = null,
        public readonly ?string $idEventCampState = null,
        public readonly ?string $eventCampState = null,
        public readonly ?string $personLeader = null,
        public readonly ?string $mobileContact = null,
        public readonly ?string $mobileContactDisplay = null,
        public readonly ?float $gpsLatitude = null,
        public readonly ?float $gpsLongitude = null,
        public readonly ?string $dateReal = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            startDate: isset($obj->{'StartDate'}) ? (string) $obj->{'StartDate'} : null,
            endDate: isset($obj->{'EndDate'}) ? (string) $obj->{'EndDate'} : null,
            location: isset($obj->{'Location'}) ? (string) $obj->{'Location'} : null,
            idEventCampState: isset($obj->{'ID_EventCampState'}) ? (string) $obj->{'ID_EventCampState'} : null,
            eventCampState: isset($obj->{'EventCampState'}) ? (string) $obj->{'EventCampState'} : null,
            personLeader: isset($obj->{'PersonLeader'}) ? (string) $obj->{'PersonLeader'} : null,
            mobileContact: isset($obj->{'MobileContact'}) ? (string) $obj->{'MobileContact'} : null,
            mobileContactDisplay: isset($obj->{'MobileContactDisplay'}) ? (string) $obj->{'MobileContactDisplay'} : null,
            gpsLatitude: isset($obj->{'GpsLatitude'}) ? (float) $obj->{'GpsLatitude'} : null,
            gpsLongitude: isset($obj->{'GpsLongitude'}) ? (float) $obj->{'GpsLongitude'} : null,
            dateReal: isset($obj->{'DateReal'}) ? (string) $obj->{'DateReal'} : null,
        );
    }
}
