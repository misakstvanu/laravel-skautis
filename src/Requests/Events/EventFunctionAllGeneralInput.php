<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventFunctionAllGeneralInput
{
    public function __construct(
        public readonly ?int $idEventGeneral = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idEventFunctionType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventGeneral' => $this->idEventGeneral,
            'ID_Person' => $this->idPerson,
            'ID_EventFunctionType' => $this->idEventFunctionType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
