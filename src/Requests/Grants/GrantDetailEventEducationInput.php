<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantDetailEventEducationInput
{
    public function __construct(
        public readonly ?int $idEventEducation = null,
        public readonly ?int $year = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducation' => $this->idEventEducation,
            'Year' => $this->year,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
