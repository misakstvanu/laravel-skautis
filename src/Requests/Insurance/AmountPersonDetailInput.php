<?php

namespace Misakstvanu\LaravelSkautis\Requests\Insurance;

final class AmountPersonDetailInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $id = null,
        public readonly ?int $year = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'Year' => $this->year,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
