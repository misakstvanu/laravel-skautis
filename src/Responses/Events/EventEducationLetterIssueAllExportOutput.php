<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationLetterIssueAllExportOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idPersonGenerated = null,
        public readonly ?string $personGenerated = null,
        public readonly ?int $idQualificationType = null,
        public readonly ?string $qualificationType = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $birthday = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $unitWithRegistrationNumber = null,
        public readonly ?string $idEventEducationLetterRequestState = null,
        public readonly ?string $eventEducationLetterRequestState = null,
        public readonly ?string $dateCreate = null,
        public readonly ?string $date = null,
        public readonly ?string $dateSent = null,
        public readonly ?bool $isSent = null,
        public readonly ?string $dateGenerated = null,
        public readonly ?int $idEventEducationLetterNumber = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?string $letterNumber = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idPersonGenerated: isset($obj->{'ID_PersonGenerated'}) ? (int) $obj->{'ID_PersonGenerated'} : null,
            personGenerated: isset($obj->{'PersonGenerated'}) ? (string) $obj->{'PersonGenerated'} : null,
            idQualificationType: isset($obj->{'ID_QualificationType'}) ? (int) $obj->{'ID_QualificationType'} : null,
            qualificationType: isset($obj->{'QualificationType'}) ? (string) $obj->{'QualificationType'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            birthday: isset($obj->{'Birthday'}) ? (string) $obj->{'Birthday'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            unitWithRegistrationNumber: isset($obj->{'UnitWithRegistrationNumber'}) ? (string) $obj->{'UnitWithRegistrationNumber'} : null,
            idEventEducationLetterRequestState: isset($obj->{'ID_EventEducationLetterRequestState'}) ? (string) $obj->{'ID_EventEducationLetterRequestState'} : null,
            eventEducationLetterRequestState: isset($obj->{'EventEducationLetterRequestState'}) ? (string) $obj->{'EventEducationLetterRequestState'} : null,
            dateCreate: isset($obj->{'DateCreate'}) ? (string) $obj->{'DateCreate'} : null,
            date: isset($obj->{'Date'}) ? (string) $obj->{'Date'} : null,
            dateSent: isset($obj->{'DateSent'}) ? (string) $obj->{'DateSent'} : null,
            isSent: isset($obj->{'IsSent'}) ? (bool) $obj->{'IsSent'} : null,
            dateGenerated: isset($obj->{'DateGenerated'}) ? (string) $obj->{'DateGenerated'} : null,
            idEventEducationLetterNumber: isset($obj->{'ID_EventEducationLetterNumber'}) ? (int) $obj->{'ID_EventEducationLetterNumber'} : null,
            idEventEducationType: isset($obj->{'ID_EventEducationType'}) ? (int) $obj->{'ID_EventEducationType'} : null,
            eventEducationType: isset($obj->{'EventEducationType'}) ? (string) $obj->{'EventEducationType'} : null,
            letterNumber: isset($obj->{'LetterNumber'}) ? (string) $obj->{'LetterNumber'} : null,
        );
    }
}
