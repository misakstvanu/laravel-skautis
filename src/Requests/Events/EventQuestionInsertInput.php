<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventQuestionInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idQuestionType = null,
        public readonly ?string $questionType = null,
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?string $eventEducationCourse = null,
        public readonly ?string $displayName = null,
        public readonly ?string $help = null,
        public readonly ?string $note = null,
        public readonly ?string $idQuestionRequirement = null,
        public readonly ?string $questionRequirement = null,
        public readonly ?bool $isRequired = null,
        public readonly ?bool $isRequiredEntry = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_QuestionType' => $this->idQuestionType,
            'QuestionType' => $this->questionType,
            'ID_EventEducationCourse' => $this->idEventEducationCourse,
            'EventEducationCourse' => $this->eventEducationCourse,
            'DisplayName' => $this->displayName,
            'Help' => $this->help,
            'Note' => $this->note,
            'ID_QuestionRequirement' => $this->idQuestionRequirement,
            'QuestionRequirement' => $this->questionRequirement,
            'IsRequired' => $this->isRequired,
            'IsRequiredEntry' => $this->isRequiredEntry,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
