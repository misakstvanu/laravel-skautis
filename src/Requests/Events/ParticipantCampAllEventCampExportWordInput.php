<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class ParticipantCampAllEventCampExportWordInput
{
    public function __construct(
        public readonly ?int $idEventCamp = null,
        public readonly ?int $idPerson = null,
        public readonly ?bool $isReturnQuestion = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCamp' => $this->idEventCamp,
            'ID_Person' => $this->idPerson,
            'IsReturnQuestion' => $this->isReturnQuestion,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
