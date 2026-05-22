<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCongressFunctionDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idEventCongress = null,
        public readonly ?string $eventCongress = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $idUnitType = null,
        public readonly ?int $idFunctionType = null,
        public readonly ?string $functionType = null,
        public readonly ?bool $isCandidateWith = null,
        public readonly ?string $idEventCongressState = null,
        public readonly ?bool $hasPassed = null,
        public readonly ?int $maxCount = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idEventCongress: isset($obj->{'ID_EventCongress'}) ? (int) $obj->{'ID_EventCongress'} : null,
            eventCongress: isset($obj->{'EventCongress'}) ? (string) $obj->{'EventCongress'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            idUnitType: isset($obj->{'ID_UnitType'}) ? (string) $obj->{'ID_UnitType'} : null,
            idFunctionType: isset($obj->{'ID_FunctionType'}) ? (int) $obj->{'ID_FunctionType'} : null,
            functionType: isset($obj->{'FunctionType'}) ? (string) $obj->{'FunctionType'} : null,
            isCandidateWith: isset($obj->{'IsCandidateWith'}) ? (bool) $obj->{'IsCandidateWith'} : null,
            idEventCongressState: isset($obj->{'ID_EventCongressState'}) ? (string) $obj->{'ID_EventCongressState'} : null,
            hasPassed: isset($obj->{'HasPassed'}) ? (bool) $obj->{'HasPassed'} : null,
            maxCount: isset($obj->{'MaxCount'}) ? (int) $obj->{'MaxCount'} : null,
        );
    }
}
