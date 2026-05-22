<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class ParticipantEducationDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idParticipant = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?bool $isActive = null,
        public readonly ?bool $fillCondition = null,
        public readonly ?bool $isSubstitute = null,
        public readonly ?bool $isAccepted = null,
        public readonly ?string $graduated = null,
        public readonly ?string $note = null,
        public readonly ?bool $updateNote = null,
        public readonly ?string $dateLetterRequest = null,
        public readonly ?string $signOut = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idParticipant: isset($obj->{'ID_Participant'}) ? (int) $obj->{'ID_Participant'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idEventEducationType: isset($obj->{'ID_EventEducationType'}) ? (string) $obj->{'ID_EventEducationType'} : null,
            eventEducationType: isset($obj->{'EventEducationType'}) ? (string) $obj->{'EventEducationType'} : null,
            idEventEducation: isset($obj->{'ID_EventEducation'}) ? (int) $obj->{'ID_EventEducation'} : null,
            idEventEducationCourse: isset($obj->{'ID_EventEducationCourse'}) ? (int) $obj->{'ID_EventEducationCourse'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            fillCondition: isset($obj->{'FillCondition'}) ? (bool) $obj->{'FillCondition'} : null,
            isSubstitute: isset($obj->{'IsSubstitute'}) ? (bool) $obj->{'IsSubstitute'} : null,
            isAccepted: isset($obj->{'IsAccepted'}) ? (bool) $obj->{'IsAccepted'} : null,
            graduated: isset($obj->{'Graduated'}) ? (string) $obj->{'Graduated'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            updateNote: isset($obj->{'UpdateNote'}) ? (bool) $obj->{'UpdateNote'} : null,
            dateLetterRequest: isset($obj->{'DateLetterRequest'}) ? (string) $obj->{'DateLetterRequest'} : null,
            signOut: isset($obj->{'SignOut'}) ? (string) $obj->{'SignOut'} : null,
        );
    }
}
