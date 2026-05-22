<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseItemUpdateDeleteInput
{
    public function __construct(
        public readonly ?int $int = null,
        public readonly ?string $deletionDate = null,
        public readonly ?string $deletionNote = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'int' => $this->int,
            'DeletionDate' => $this->deletionDate,
            'DeletionNote' => $this->deletionNote,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
