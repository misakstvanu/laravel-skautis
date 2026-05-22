<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventConditionAllInput
{
    public function __construct(
        public readonly ?int $idEvent = null,
        public readonly ?int $id = null,
        public readonly ?string $idConditionType = null,
        public readonly ?int $idUser = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Event' => $this->idEvent,
            'ID' => $this->id,
            'ID_ConditionType' => $this->idConditionType,
            'ID_User' => $this->idUser,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
