<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class InstructorAllInstructorTypeInput
{
    public function __construct(
        public readonly ?int $idEventEducation = null,
        public readonly ?bool $showAll = null,
        public readonly ?string $idInstructorType = null,
        public readonly ?int $idEventEducationExam = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducation' => $this->idEventEducation,
            'ShowAll' => $this->showAll,
            'ID_InstructorType' => $this->idInstructorType,
            'ID_EventEducationExam' => $this->idEventEducationExam,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
