<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventFunctionUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idEventFunctionType = null,
        public readonly ?string $note = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'ID_EventFunctionType' => $this->idEventFunctionType,
            'Note' => $this->note,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
