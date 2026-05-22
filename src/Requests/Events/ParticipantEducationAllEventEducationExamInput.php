<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class ParticipantEducationAllEventEducationExamInput
{
    public function __construct(
        public readonly ?int $idEventEducationExam = null,
        public readonly ?bool $excludeExisting = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducationExam' => $this->idEventEducationExam,
            'ExcludeExisting' => $this->excludeExisting,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
