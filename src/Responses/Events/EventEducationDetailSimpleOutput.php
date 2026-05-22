<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationDetailSimpleOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvent = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $idEventEducationState = null,
        public readonly ?string $eventEducationState = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?int $idGrant = null,
        public readonly ?string $grant = null,
        public readonly ?string $idGrantType = null,
        public readonly ?string $grantType = null,
        public readonly ?string $publicized = null,
        public readonly ?bool $isCounselor = null,
        public readonly ?bool $hasStarted = null,
        public readonly ?bool $hasEnded = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEvent: isset($obj->{'ID_Event'}) ? (int) $obj->{'ID_Event'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            idEventEducationState: isset($obj->{'ID_EventEducationState'}) ? (string) $obj->{'ID_EventEducationState'} : null,
            eventEducationState: isset($obj->{'EventEducationState'}) ? (string) $obj->{'EventEducationState'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idGrant: isset($obj->{'ID_Grant'}) ? (int) $obj->{'ID_Grant'} : null,
            grant: isset($obj->{'Grant'}) ? (string) $obj->{'Grant'} : null,
            idGrantType: isset($obj->{'ID_GrantType'}) ? (string) $obj->{'ID_GrantType'} : null,
            grantType: isset($obj->{'GrantType'}) ? (string) $obj->{'GrantType'} : null,
            publicized: isset($obj->{'Publicized'}) ? (string) $obj->{'Publicized'} : null,
            isCounselor: isset($obj->{'IsCounselor'}) ? (bool) $obj->{'IsCounselor'} : null,
            hasStarted: isset($obj->{'HasStarted'}) ? (bool) $obj->{'HasStarted'} : null,
            hasEnded: isset($obj->{'HasEnded'}) ? (bool) $obj->{'HasEnded'} : null,
        );
    }
}
