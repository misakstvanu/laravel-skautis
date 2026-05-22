<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCampCapitalDataDetailInput
{
    public function __construct(
        public readonly ?int $idEventCamp = null,
        public readonly ?bool $isForReport = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCamp' => $this->idEventCamp,
            'IsForReport' => $this->isForReport,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
