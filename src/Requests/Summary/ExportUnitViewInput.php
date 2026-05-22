<?php

namespace Misakstvanu\LaravelSkautis\Requests\Summary;

final class ExportUnitViewInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnitFilter = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_UnitFilter' => $this->idUnitFilter,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
