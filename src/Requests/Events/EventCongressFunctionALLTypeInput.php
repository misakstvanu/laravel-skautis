<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCongressFunctionALLTypeInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?int $idEventCongress = null,
        public readonly ?int $idFunctionType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'ID_EventCongress' => $this->idEventCongress,
            'ID_FunctionType' => $this->idFunctionType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
