<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationLetterRequestAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idParticipantEducationExam = null,
        public readonly ?string $idEventEducationLetterRequestState = null,
        public readonly ?string $eventEducationLetterRequestState = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $identificationCode = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?string $eventEducation = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?int $idQualificationType = null,
        public readonly ?string $qualificationType = null,
        public readonly ?string $dateExam = null,
        public readonly ?string $dateLetter = null,
        public readonly ?string $date = null,
        public readonly ?string $dateSent = null,
        public readonly ?string $letterNumber = null,
        public readonly ?string $qualificationTypeKey = null,
        public readonly ?string $dateGenerated = null,
        public readonly ?string $dateCreate = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idParticipantEducationExam: isset($obj->{'ID_ParticipantEducationExam'}) ? (int) $obj->{'ID_ParticipantEducationExam'} : null,
            idEventEducationLetterRequestState: isset($obj->{'ID_EventEducationLetterRequestState'}) ? (string) $obj->{'ID_EventEducationLetterRequestState'} : null,
            eventEducationLetterRequestState: isset($obj->{'EventEducationLetterRequestState'}) ? (string) $obj->{'EventEducationLetterRequestState'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            identificationCode: isset($obj->{'IdentificationCode'}) ? (string) $obj->{'IdentificationCode'} : null,
            idEventEducation: isset($obj->{'ID_EventEducation'}) ? (int) $obj->{'ID_EventEducation'} : null,
            eventEducation: isset($obj->{'EventEducation'}) ? (string) $obj->{'EventEducation'} : null,
            idEventEducationType: isset($obj->{'ID_EventEducationType'}) ? (int) $obj->{'ID_EventEducationType'} : null,
            eventEducationType: isset($obj->{'EventEducationType'}) ? (string) $obj->{'EventEducationType'} : null,
            idQualificationType: isset($obj->{'ID_QualificationType'}) ? (int) $obj->{'ID_QualificationType'} : null,
            qualificationType: isset($obj->{'QualificationType'}) ? (string) $obj->{'QualificationType'} : null,
            dateExam: isset($obj->{'DateExam'}) ? (string) $obj->{'DateExam'} : null,
            dateLetter: isset($obj->{'DateLetter'}) ? (string) $obj->{'DateLetter'} : null,
            date: isset($obj->{'Date'}) ? (string) $obj->{'Date'} : null,
            dateSent: isset($obj->{'DateSent'}) ? (string) $obj->{'DateSent'} : null,
            letterNumber: isset($obj->{'LetterNumber'}) ? (string) $obj->{'LetterNumber'} : null,
            qualificationTypeKey: isset($obj->{'QualificationTypeKey'}) ? (string) $obj->{'QualificationTypeKey'} : null,
            dateGenerated: isset($obj->{'DateGenerated'}) ? (string) $obj->{'DateGenerated'} : null,
            dateCreate: isset($obj->{'DateCreate'}) ? (string) $obj->{'DateCreate'} : null,
        );
    }
}
