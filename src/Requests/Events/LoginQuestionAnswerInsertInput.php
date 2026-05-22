<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class LoginQuestionAnswerInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idCampLoginQuestion = null,
        public readonly ?string $campLoginQuestion = null,
        public readonly ?int $idCampFixedQuestion = null,
        public readonly ?string $campFixedQuestion = null,
        public readonly ?string $value = null,
        public readonly ?int $idDocument = null,
        public readonly ?int $idParticipantCamp = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_CampLoginQuestion' => $this->idCampLoginQuestion,
            'CampLoginQuestion' => $this->campLoginQuestion,
            'ID_CampFixedQuestion' => $this->idCampFixedQuestion,
            'CampFixedQuestion' => $this->campFixedQuestion,
            'Value' => $this->value,
            'ID_Document' => $this->idDocument,
            'ID_ParticipantCamp' => $this->idParticipantCamp,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
