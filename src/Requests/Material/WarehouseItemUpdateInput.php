<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseItemUpdateInput
{
    public function __construct(
        public readonly ?bool $deletePhoto = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DeletePhoto' => $this->deletePhoto,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
