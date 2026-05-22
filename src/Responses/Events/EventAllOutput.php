<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $startDate = null,
        public readonly ?string $endDate = null,
        public readonly ?string $location = null,
        public readonly ?string $idEventState = null,
        public readonly ?string $eventState = null,
        public readonly ?string $idEventType = null,
        public readonly ?string $eventType = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $personLeader = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            startDate: isset($obj->{'StartDate'}) ? (string) $obj->{'StartDate'} : null,
            endDate: isset($obj->{'EndDate'}) ? (string) $obj->{'EndDate'} : null,
            location: isset($obj->{'Location'}) ? (string) $obj->{'Location'} : null,
            idEventState: isset($obj->{'ID_EventState'}) ? (string) $obj->{'ID_EventState'} : null,
            eventState: isset($obj->{'EventState'}) ? (string) $obj->{'EventState'} : null,
            idEventType: isset($obj->{'ID_EventType'}) ? (string) $obj->{'ID_EventType'} : null,
            eventType: isset($obj->{'EventType'}) ? (string) $obj->{'EventType'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            personLeader: isset($obj->{'PersonLeader'}) ? (string) $obj->{'PersonLeader'} : null,
        );
    }
}

