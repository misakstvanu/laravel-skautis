<?php

namespace Misakstvanu\LaravelSkautis\Responses\Material;

final class WarehouseAllStockTakingUnitOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $unitFullName = null,
        public readonly ?string $note = null,
        public readonly ?bool $canUpdate = null,
        public readonly ?int $idStockTakingActive = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            unitFullName: isset($obj->{'UnitFullName'}) ? (string) $obj->{'UnitFullName'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            canUpdate: isset($obj->{'CanUpdate'}) ? (bool) $obj->{'CanUpdate'} : null,
            idStockTakingActive: isset($obj->{'ID_StockTakingActive'}) ? (int) $obj->{'ID_StockTakingActive'} : null,
        );
    }
}
