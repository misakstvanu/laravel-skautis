<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class CandidateAllApprovedOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idEventCongress = null,
        public readonly ?string $eventCongress = null,
        public readonly ?string $idCandidateState = null,
        public readonly ?string $candidateState = null,
        public readonly ?string $stateDecision = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idCandidateWith = null,
        public readonly ?string $personWith = null,
        public readonly ?int $idEventCongressFunction = null,
        public readonly ?string $eventCongressFunction = null,
        public readonly ?int $idFunctionType = null,
        public readonly ?string $functionType = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $unitType = null,
        public readonly ?string $attachmentExtension = null,
        public readonly ?int $votesCount = null,
        public readonly ?int $order = null,
        public readonly ?bool $isElected = null,
        public readonly ?bool $canDetail = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idEventCongress: isset($obj->{'ID_EventCongress'}) ? (int) $obj->{'ID_EventCongress'} : null,
            eventCongress: isset($obj->{'EventCongress'}) ? (string) $obj->{'EventCongress'} : null,
            idCandidateState: isset($obj->{'ID_CandidateState'}) ? (string) $obj->{'ID_CandidateState'} : null,
            candidateState: isset($obj->{'CandidateState'}) ? (string) $obj->{'CandidateState'} : null,
            stateDecision: isset($obj->{'StateDecision'}) ? (string) $obj->{'StateDecision'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idCandidateWith: isset($obj->{'ID_CandidateWith'}) ? (int) $obj->{'ID_CandidateWith'} : null,
            personWith: isset($obj->{'PersonWith'}) ? (string) $obj->{'PersonWith'} : null,
            idEventCongressFunction: isset($obj->{'ID_EventCongressFunction'}) ? (int) $obj->{'ID_EventCongressFunction'} : null,
            eventCongressFunction: isset($obj->{'EventCongressFunction'}) ? (string) $obj->{'EventCongressFunction'} : null,
            idFunctionType: isset($obj->{'ID_FunctionType'}) ? (int) $obj->{'ID_FunctionType'} : null,
            functionType: isset($obj->{'FunctionType'}) ? (string) $obj->{'FunctionType'} : null,
            idUnitType: isset($obj->{'ID_UnitType'}) ? (string) $obj->{'ID_UnitType'} : null,
            unitType: isset($obj->{'UnitType'}) ? (string) $obj->{'UnitType'} : null,
            attachmentExtension: isset($obj->{'AttachmentExtension'}) ? (string) $obj->{'AttachmentExtension'} : null,
            votesCount: isset($obj->{'VotesCount'}) ? (int) $obj->{'VotesCount'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
            isElected: isset($obj->{'IsElected'}) ? (bool) $obj->{'IsElected'} : null,
            canDetail: isset($obj->{'CanDetail'}) ? (bool) $obj->{'CanDetail'} : null,
        );
    }
}
