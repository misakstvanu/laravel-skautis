<?php

namespace Misakstvanu\LaravelSkautis\Requests\Reports;

final class ParticipantEducationFeeExcelInput
{
    public function __construct(
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?bool $isActive = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducation' => $this->idEventEducation,
            'ID_EventEducationCourse' => $this->idEventEducationCourse,
            'IsActive' => $this->isActive,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
