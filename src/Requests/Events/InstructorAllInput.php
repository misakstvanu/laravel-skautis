<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class InstructorAllInput
{
    public function __construct(
        public readonly ?int $idEventEducation = null,
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $idInstructorType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducation' => $this->idEventEducation,
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'ID_InstructorType' => $this->idInstructorType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
