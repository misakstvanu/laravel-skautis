<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonAllEventEducationApiOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idInstructor = null,
        public readonly ?int $idPersonPhotoNormal = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isInstructor = null,
        public readonly ?string $function_ = null,
        public readonly ?string $scoutExperience = null,
        public readonly ?string $eventFocus = null,
        public readonly ?string $professionalExperience = null,
        public readonly ?string $qualifications = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idInstructor: isset($obj->{'ID_Instructor'}) ? (int) $obj->{'ID_Instructor'} : null,
            idPersonPhotoNormal: isset($obj->{'ID_PersonPhotoNormal'}) ? (int) $obj->{'ID_PersonPhotoNormal'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            isInstructor: isset($obj->{'IsInstructor'}) ? (bool) $obj->{'IsInstructor'} : null,
            function_: isset($obj->{'Function'}) ? (string) $obj->{'Function'} : null,
            scoutExperience: isset($obj->{'ScoutExperience'}) ? (string) $obj->{'ScoutExperience'} : null,
            eventFocus: isset($obj->{'EventFocus'}) ? (string) $obj->{'EventFocus'} : null,
            professionalExperience: isset($obj->{'ProfessionalExperience'}) ? (string) $obj->{'ProfessionalExperience'} : null,
            qualifications: isset($obj->{'Qualifications'}) ? (string) $obj->{'Qualifications'} : null,
        );
    }
}
