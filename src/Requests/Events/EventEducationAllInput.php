<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $idEventEducationGroup = null,
        public readonly ?int $year = null,
        public readonly ?int $idUnit = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_EventEducationType' => $this->idEventEducationType,
            'ID_EventEducationGroup' => $this->idEventEducationGroup,
            'Year' => $this->year,
            'ID_Unit' => $this->idUnit,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
