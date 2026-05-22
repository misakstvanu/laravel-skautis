<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseTagInsertInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $color = null,
        public readonly ?int $int = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ID_Unit' => $this->idUnit,
            'Color' => $this->color,
            'int' => $this->int,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
