<?php

namespace Misakstvanu\LaravelSkautis\Requests\Summary;

final class ExportUnitUnitTypeAllInput
{
    public function __construct(
        public readonly ?int $idExportUnit = null,
        public readonly ?int $id = null,
        public readonly ?string $idUnitType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_ExportUnit' => $this->idExportUnit,
            'ID' => $this->id,
            'ID_UnitType' => $this->idUnitType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
