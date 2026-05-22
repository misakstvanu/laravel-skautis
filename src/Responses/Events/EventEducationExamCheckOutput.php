<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationExamCheckOutput
{
    public function __construct(
        public readonly ?string $missingQualifications = null,
        public readonly ?string $missingQualificationGroups = null,
        public readonly ?string $personQualifications = null,
        public readonly ?int $membersRequired = null,
        public readonly ?int $membersAssigned = null,
        public readonly ?bool $isValid = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            missingQualifications: isset($obj->{'MissingQualifications'}) ? (string) $obj->{'MissingQualifications'} : null,
            missingQualificationGroups: isset($obj->{'MissingQualificationGroups'}) ? (string) $obj->{'MissingQualificationGroups'} : null,
            personQualifications: isset($obj->{'PersonQualifications'}) ? (string) $obj->{'PersonQualifications'} : null,
            membersRequired: isset($obj->{'MembersRequired'}) ? (int) $obj->{'MembersRequired'} : null,
            membersAssigned: isset($obj->{'MembersAssigned'}) ? (int) $obj->{'MembersAssigned'} : null,
            isValid: isset($obj->{'IsValid'}) ? (bool) $obj->{'IsValid'} : null,
        );
    }
}
