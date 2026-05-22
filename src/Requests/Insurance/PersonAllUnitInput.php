<?php

namespace Misakstvanu\LaravelSkautis\Requests\Insurance;

final class PersonAllUnitInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?int $year = null,
        public readonly ?bool $showRegistered = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'Year' => $this->year,
            'ShowRegistered' => $this->showRegistered,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
