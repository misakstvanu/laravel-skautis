<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationAllMyActionsInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?bool $isFuture = null,
        public readonly ?int $year = null,
        public readonly ?string $idRelationType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventEducationType' => $this->idEventEducationType,
            'IsFuture' => $this->isFuture,
            'Year' => $this->year,
            'ID_RelationType' => $this->idRelationType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
