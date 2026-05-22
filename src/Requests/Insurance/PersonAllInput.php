<?php

namespace Misakstvanu\LaravelSkautis\Requests\Insurance;

final class PersonAllInput
{
    public function __construct(
        public readonly ?string $person = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idFunction = null,
        public readonly ?int $year = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Person' => $this->person,
            'ID_Unit' => $this->idUnit,
            'ID_Function' => $this->idFunction,
            'Year' => $this->year,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
