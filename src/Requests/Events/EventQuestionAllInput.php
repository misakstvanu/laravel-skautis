<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventQuestionAllInput
{
    public function __construct(
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?int $id = null,
        public readonly ?string $idQuestionType = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idQuestionRequirement = null,
        public readonly ?int $idParticipantEducation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducationCourse' => $this->idEventEducationCourse,
            'ID' => $this->id,
            'ID_QuestionType' => $this->idQuestionType,
            'DisplayName' => $this->displayName,
            'ID_QuestionRequirement' => $this->idQuestionRequirement,
            'ID_ParticipantEducation' => $this->idParticipantEducation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
