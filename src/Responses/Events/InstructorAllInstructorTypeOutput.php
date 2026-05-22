<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class InstructorAllInstructorTypeOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $idInstructorType = null,
        public readonly ?string $instructorType = null,
        public readonly ?string $scoutExperience = null,
        public readonly ?string $eventFocus = null,
        public readonly ?string $professionalExperience = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idInstructorType: isset($obj->{'ID_InstructorType'}) ? (string) $obj->{'ID_InstructorType'} : null,
            instructorType: isset($obj->{'InstructorType'}) ? (string) $obj->{'InstructorType'} : null,
            scoutExperience: isset($obj->{'ScoutExperience'}) ? (string) $obj->{'ScoutExperience'} : null,
            eventFocus: isset($obj->{'EventFocus'}) ? (string) $obj->{'EventFocus'} : null,
            professionalExperience: isset($obj->{'ProfessionalExperience'}) ? (string) $obj->{'ProfessionalExperience'} : null,
        );
    }
}
