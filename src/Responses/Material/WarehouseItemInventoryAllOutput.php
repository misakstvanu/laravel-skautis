<?php

namespace Misakstvanu\LaravelSkautis\Responses\Material;

final class WarehouseItemInventoryAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idWarehouseItem = null,
        public readonly ?string $warehouseItem = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $date = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idWarehouseItem: isset($obj->{'ID_WarehouseItem'}) ? (int) $obj->{'ID_WarehouseItem'} : null,
            warehouseItem: isset($obj->{'WarehouseItem'}) ? (string) $obj->{'WarehouseItem'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            date: isset($obj->{'Date'}) ? (string) $obj->{'Date'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
