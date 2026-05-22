<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationCheckOutput
{
    public function __construct(
        public readonly ?string $mistake = null,
        public readonly ?int $instructorPermanentRequired = null,
        public readonly ?int $instructorPermanentAssigned = null,
        public readonly ?int $instructorRequired = null,
        public readonly ?int $instructorAssigned = null,
        public readonly ?bool $instructorRequirementsSummarized = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            mistake: isset($obj->{'Mistake'}) ? (string) $obj->{'Mistake'} : null,
            instructorPermanentRequired: isset($obj->{'InstructorPermanentRequired'}) ? (int) $obj->{'InstructorPermanentRequired'} : null,
            instructorPermanentAssigned: isset($obj->{'InstructorPermanentAssigned'}) ? (int) $obj->{'InstructorPermanentAssigned'} : null,
            instructorRequired: isset($obj->{'InstructorRequired'}) ? (int) $obj->{'InstructorRequired'} : null,
            instructorAssigned: isset($obj->{'InstructorAssigned'}) ? (int) $obj->{'InstructorAssigned'} : null,
            instructorRequirementsSummarized: isset($obj->{'InstructorRequirementsSummarized'}) ? (bool) $obj->{'InstructorRequirementsSummarized'} : null,
        );
    }
}
