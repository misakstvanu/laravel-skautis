<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class ParticipantCourseTermUpdateInput
{
    public function __construct(
        public readonly ?int $idParticipantEducation = null,
        public readonly ?int $idEventEducationTerm = null,
        public readonly ?int $days = null,
        public readonly ?int $realDays = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_ParticipantEducation' => $this->idParticipantEducation,
            'ID_EventEducationTerm' => $this->idEventEducationTerm,
            'Days' => $this->days,
            'RealDays' => $this->realDays,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
