<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class DelegateAllPreferenceInput
{
    public function __construct(
        public readonly ?int $idEventCongress = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCongress' => $this->idEventCongress,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
