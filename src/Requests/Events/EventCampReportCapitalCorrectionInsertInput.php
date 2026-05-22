<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCampReportCapitalCorrectionInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventCamp = null,
        public readonly ?int $idPersonCreated = null,
        public readonly ?string $personCreated = null,
        public readonly ?string $dateCreated = null,
        public readonly ?string $decision = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventCamp' => $this->idEventCamp,
            'ID_PersonCreated' => $this->idPersonCreated,
            'PersonCreated' => $this->personCreated,
            'DateCreated' => $this->dateCreated,
            'Decision' => $this->decision,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
