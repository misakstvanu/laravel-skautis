<?php

namespace Misakstvanu\LaravelSkautis\Requests\Reports;

final class ExportUnitInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $fileFormat = null,
        public readonly ?int $idUnitFilter = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'FileFormat' => $this->fileFormat,
            'ID_UnitFilter' => $this->idUnitFilter,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
