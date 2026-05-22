<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationExamAllInput
{
    public function __construct(
        public readonly ?int $idEventEducation = null,
        public readonly ?int $id = null,
        public readonly ?int $idQualificationType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducation' => $this->idEventEducation,
            'ID' => $this->id,
            'ID_QualificationType' => $this->idQualificationType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
