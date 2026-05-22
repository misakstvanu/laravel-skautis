<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class InstructorDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?string $eventEducation = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $idInstructorType = null,
        public readonly ?string $instructorType = null,
        public readonly ?string $scoutExperience = null,
        public readonly ?string $eventFocus = null,
        public readonly ?string $professionalExperience = null,
        public readonly ?string $email = null,
        public readonly ?bool $isSystem = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventEducation: isset($obj->{'ID_EventEducation'}) ? (int) $obj->{'ID_EventEducation'} : null,
            eventEducation: isset($obj->{'EventEducation'}) ? (string) $obj->{'EventEducation'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idInstructorType: isset($obj->{'ID_InstructorType'}) ? (string) $obj->{'ID_InstructorType'} : null,
            instructorType: isset($obj->{'InstructorType'}) ? (string) $obj->{'InstructorType'} : null,
            scoutExperience: isset($obj->{'ScoutExperience'}) ? (string) $obj->{'ScoutExperience'} : null,
            eventFocus: isset($obj->{'EventFocus'}) ? (string) $obj->{'EventFocus'} : null,
            professionalExperience: isset($obj->{'ProfessionalExperience'}) ? (string) $obj->{'ProfessionalExperience'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            isSystem: isset($obj->{'IsSystem'}) ? (bool) $obj->{'IsSystem'} : null,
        );
    }
}
