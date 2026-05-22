<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class ParticipantEducationInsertEnrollInput
{
    public function __construct(
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $phone = null,
        public readonly ?bool $acknownledgement = null,
        public readonly ?bool $affirmation = null,
        public readonly mixed $eventQuestion = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducationCourse' => $this->idEventEducationCourse,
            'ID_Person' => $this->idPerson,
            'Phone' => $this->phone,
            'Acknownledgement' => $this->acknownledgement,
            'Affirmation' => $this->affirmation,
            'EventQuestion' => $this->eventQuestion,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
