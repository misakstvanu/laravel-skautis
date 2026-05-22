<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class DelegateDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idParticipant = null,
        public readonly ?int $idCandidate = null,
        public readonly ?string $idDelegateState = null,
        public readonly ?string $delegateState = null,
        public readonly ?string $cancelDescription = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idEventCongress = null,
        public readonly ?string $eventCongress = null,
        public readonly ?int $idParticipantEducation = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idParticipant: isset($obj->{'ID_Participant'}) ? (int) $obj->{'ID_Participant'} : null,
            idCandidate: isset($obj->{'ID_Candidate'}) ? (int) $obj->{'ID_Candidate'} : null,
            idDelegateState: isset($obj->{'ID_DelegateState'}) ? (string) $obj->{'ID_DelegateState'} : null,
            delegateState: isset($obj->{'DelegateState'}) ? (string) $obj->{'DelegateState'} : null,
            cancelDescription: isset($obj->{'CancelDescription'}) ? (string) $obj->{'CancelDescription'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idEventCongress: isset($obj->{'ID_EventCongress'}) ? (int) $obj->{'ID_EventCongress'} : null,
            eventCongress: isset($obj->{'EventCongress'}) ? (string) $obj->{'EventCongress'} : null,
            idParticipantEducation: isset($obj->{'ID_ParticipantEducation'}) ? (int) $obj->{'ID_ParticipantEducation'} : null,
        );
    }
}
