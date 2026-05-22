<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventFunctionAllEducationAssistantInput
{
    public function __construct(
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idPerson = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducation' => $this->idEventEducation,
            'ID_Person' => $this->idPerson,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
