<?php

namespace Misakstvanu\LaravelSkautis\Requests\Insurance;

final class AmountPersonInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?float $amount = null,
        public readonly ?int $year = null,
        public readonly ?string $note = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Amount' => $this->amount,
            'Year' => $this->year,
            'Note' => $this->note,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
