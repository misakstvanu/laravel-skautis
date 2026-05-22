<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationExamExceptionInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventEducationExam = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $note = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventEducationExam' => $this->idEventEducationExam,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'Note' => $this->note,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
