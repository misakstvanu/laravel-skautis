<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseItemDetailPhotoInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $id = null,
        public readonly ?string $size = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'Size' => $this->size,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
