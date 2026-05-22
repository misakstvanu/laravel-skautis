<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCongressFunctionAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventCongress = null,
        public readonly ?int $idFunctionType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventCongress' => $this->idEventCongress,
            'ID_FunctionType' => $this->idFunctionType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
