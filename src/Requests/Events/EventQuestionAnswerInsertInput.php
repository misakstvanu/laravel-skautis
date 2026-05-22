<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventQuestionAnswerInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventQuestion = null,
        public readonly ?string $eventEducationCourse = null,
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?string $value = null,
        public readonly ?int $idDocument = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventQuestion' => $this->idEventQuestion,
            'EventEducationCourse' => $this->eventEducationCourse,
            'ID_EventEducationCourse' => $this->idEventEducationCourse,
            'Value' => $this->value,
            'ID_Document' => $this->idDocument,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
