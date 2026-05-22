<?php

namespace Misakstvanu\LaravelSkautis\Responses\Summary;

final class ExportUnitUnitTypeAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idExportUnit = null,
        public readonly ?string $exportUnit = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $unitType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idExportUnit: isset($obj->{'ID_ExportUnit'}) ? (int) $obj->{'ID_ExportUnit'} : null,
            exportUnit: isset($obj->{'ExportUnit'}) ? (string) $obj->{'ExportUnit'} : null,
            idUnitType: isset($obj->{'ID_UnitType'}) ? (string) $obj->{'ID_UnitType'} : null,
            unitType: isset($obj->{'UnitType'}) ? (string) $obj->{'UnitType'} : null,
        );
    }
}
