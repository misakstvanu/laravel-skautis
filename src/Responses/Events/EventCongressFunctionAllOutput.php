<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCongressFunctionAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idEventCongress = null,
        public readonly ?string $eventCongress = null,
        public readonly ?int $idFunctionType = null,
        public readonly ?string $functionType = null,
        public readonly ?string $code = null,
        public readonly ?int $candidateCount = null,
        public readonly ?int $candidateTotalCount = null,
        public readonly ?bool $isAudit = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idEventCongress: isset($obj->{'ID_EventCongress'}) ? (int) $obj->{'ID_EventCongress'} : null,
            eventCongress: isset($obj->{'EventCongress'}) ? (string) $obj->{'EventCongress'} : null,
            idFunctionType: isset($obj->{'ID_FunctionType'}) ? (int) $obj->{'ID_FunctionType'} : null,
            functionType: isset($obj->{'FunctionType'}) ? (string) $obj->{'FunctionType'} : null,
            code: isset($obj->{'Code'}) ? (string) $obj->{'Code'} : null,
            candidateCount: isset($obj->{'CandidateCount'}) ? (int) $obj->{'CandidateCount'} : null,
            candidateTotalCount: isset($obj->{'CandidateTotalCount'}) ? (int) $obj->{'CandidateTotalCount'} : null,
            isAudit: isset($obj->{'IsAudit'}) ? (bool) $obj->{'IsAudit'} : null,
        );
    }
}
