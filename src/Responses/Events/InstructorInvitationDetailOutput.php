<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class InstructorInvitationDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEvent = null,
        public readonly ?string $eventEducation = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?string $code = null,
        public readonly ?string $email = null,
        public readonly ?int $idInstructor = null,
        public readonly ?bool $isValid = null,
        public readonly ?string $idInstructorType = null,
        public readonly ?string $instructorType = null,
        public readonly ?string $scoutExperience = null,
        public readonly ?string $eventFocus = null,
        public readonly ?string $professionalExperience = null,
        public readonly ?string $accessCode = null,
        public readonly ?string $accepted = null,
        public readonly ?string $denied = null,
        public readonly ?int $idPersonCurrent = null,
        public readonly ?string $personCurrent = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventEducation: isset($obj->{'ID_EventEducation'}) ? (int) $obj->{'ID_EventEducation'} : null,
            idEvent: isset($obj->{'ID_Event'}) ? (int) $obj->{'ID_Event'} : null,
            eventEducation: isset($obj->{'EventEducation'}) ? (string) $obj->{'EventEducation'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            code: isset($obj->{'Code'}) ? (string) $obj->{'Code'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            idInstructor: isset($obj->{'ID_Instructor'}) ? (int) $obj->{'ID_Instructor'} : null,
            isValid: isset($obj->{'IsValid'}) ? (bool) $obj->{'IsValid'} : null,
            idInstructorType: isset($obj->{'ID_InstructorType'}) ? (string) $obj->{'ID_InstructorType'} : null,
            instructorType: isset($obj->{'InstructorType'}) ? (string) $obj->{'InstructorType'} : null,
            scoutExperience: isset($obj->{'ScoutExperience'}) ? (string) $obj->{'ScoutExperience'} : null,
            eventFocus: isset($obj->{'EventFocus'}) ? (string) $obj->{'EventFocus'} : null,
            professionalExperience: isset($obj->{'ProfessionalExperience'}) ? (string) $obj->{'ProfessionalExperience'} : null,
            accessCode: isset($obj->{'AccessCode'}) ? (string) $obj->{'AccessCode'} : null,
            accepted: isset($obj->{'Accepted'}) ? (string) $obj->{'Accepted'} : null,
            denied: isset($obj->{'Denied'}) ? (string) $obj->{'Denied'} : null,
            idPersonCurrent: isset($obj->{'ID_PersonCurrent'}) ? (int) $obj->{'ID_PersonCurrent'} : null,
            personCurrent: isset($obj->{'PersonCurrent'}) ? (string) $obj->{'PersonCurrent'} : null,
        );
    }
}
