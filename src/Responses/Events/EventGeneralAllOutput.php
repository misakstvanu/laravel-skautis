<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventGeneralAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $startDate = null,
        public readonly ?string $endDate = null,
        public readonly ?string $personLeader = null,
        public readonly ?string $idEventGeneralState = null,
        public readonly ?string $eventGeneralState = null,
        public readonly ?int $idEventGeneralType = null,
        public readonly ?string $eventGeneralType = null,
        public readonly ?int $idEventGeneralScope = null,
        public readonly ?string $eventGeneralScope = null,
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
            personLeader: isset($obj->{'PersonLeader'}) ? (string) $obj->{'PersonLeader'} : null,
            idEventGeneralState: isset($obj->{'ID_EventGeneralState'}) ? (string) $obj->{'ID_EventGeneralState'} : null,
            eventGeneralState: isset($obj->{'EventGeneralState'}) ? (string) $obj->{'EventGeneralState'} : null,
            idEventGeneralType: isset($obj->{'ID_EventGeneralType'}) ? (int) $obj->{'ID_EventGeneralType'} : null,
            eventGeneralType: isset($obj->{'EventGeneralType'}) ? (string) $obj->{'EventGeneralType'} : null,
            idEventGeneralScope: isset($obj->{'ID_EventGeneralScope'}) ? (int) $obj->{'ID_EventGeneralScope'} : null,
            eventGeneralScope: isset($obj->{'EventGeneralScope'}) ? (string) $obj->{'EventGeneralScope'} : null,
        );
    }
}
