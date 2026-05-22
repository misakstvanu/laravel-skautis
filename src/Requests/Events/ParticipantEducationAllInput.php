<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class ParticipantEducationAllInput
{
    public function __construct(
        public readonly ?int $idEventEducation = null,
        public readonly ?int $int = null,
        public readonly ?int $id = null,
        public readonly ?int $idParticipant = null,
        public readonly ?bool $showPossibleGraduates = null,
        public readonly ?bool $showSubstitutes = null,
        public readonly ?bool $showOnlyAccepted = null,
        public readonly ?bool $isActive = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducation' => $this->idEventEducation,
            'int' => $this->int,
            'ID' => $this->id,
            'ID_Participant' => $this->idParticipant,
            'ShowPossibleGraduates' => $this->showPossibleGraduates,
            'ShowSubstitutes' => $this->showSubstitutes,
            'ShowOnlyAccepted' => $this->showOnlyAccepted,
            'IsActive' => $this->isActive,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
