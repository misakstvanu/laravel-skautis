<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventConditionInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvent = null,
        public readonly ?string $idConditionType = null,
        public readonly ?string $date = null,
        public readonly ?int $idUser = null,
        public readonly ?string $note = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Event' => $this->idEvent,
            'ID_ConditionType' => $this->idConditionType,
            'Date' => $this->date,
            'ID_User' => $this->idUser,
            'Note' => $this->note,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
