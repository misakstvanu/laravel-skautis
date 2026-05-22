<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantAllHeadquartersInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $year = null,
        public readonly ?string $idGrantType = null,
        public readonly ?string $headquartersNote = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Year' => $this->year,
            'ID_GrantType' => $this->idGrantType,
            'HeadquartersNote' => $this->headquartersNote,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
