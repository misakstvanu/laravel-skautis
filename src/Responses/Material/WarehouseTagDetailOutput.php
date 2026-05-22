<?php

namespace Misakstvanu\LaravelSkautis\Responses\Material;

final class WarehouseTagDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEventGeneral = null,
        public readonly ?int $idEvent = null,
        public readonly ?string $event = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $color = null,
        public readonly ?int $idWarehouse = null,
        public readonly ?string $warehouse = null,
        public readonly ?bool $canUpdate = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            idEventEducation: isset($obj->{'ID_EventEducation'}) ? (int) $obj->{'ID_EventEducation'} : null,
            idEventGeneral: isset($obj->{'ID_EventGeneral'}) ? (int) $obj->{'ID_EventGeneral'} : null,
            idEvent: isset($obj->{'ID_Event'}) ? (int) $obj->{'ID_Event'} : null,
            event: isset($obj->{'Event'}) ? (string) $obj->{'Event'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            color: isset($obj->{'Color'}) ? (string) $obj->{'Color'} : null,
            idWarehouse: isset($obj->{'ID_Warehouse'}) ? (int) $obj->{'ID_Warehouse'} : null,
            warehouse: isset($obj->{'Warehouse'}) ? (string) $obj->{'Warehouse'} : null,
            canUpdate: isset($obj->{'CanUpdate'}) ? (bool) $obj->{'CanUpdate'} : null,
        );
    }
}
