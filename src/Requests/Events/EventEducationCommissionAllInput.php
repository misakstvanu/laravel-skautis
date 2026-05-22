<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationCommissionAllInput
{
    public function __construct(
        public readonly ?int $idEventEducationExam = null,
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducationExam' => $this->idEventEducationExam,
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
