<?php

namespace Misakstvanu\LaravelSkautis\Requests\Reports;

final class ParticipantCampExcelInput
{
    public function __construct(
        public readonly ?int $idEventCamp = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCamp' => $this->idEventCamp,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
