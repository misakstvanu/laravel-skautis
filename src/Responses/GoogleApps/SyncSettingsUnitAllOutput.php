<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class SyncSettingsUnitAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGoogleGroupSyncSettings = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $unitWithRegistrationNumber = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGoogleGroupSyncSettings: isset($obj->{'ID_GoogleGroupSyncSettings'}) ? (int) $obj->{'ID_GoogleGroupSyncSettings'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            unitWithRegistrationNumber: isset($obj->{'UnitWithRegistrationNumber'}) ? (string) $obj->{'UnitWithRegistrationNumber'} : null,
        );
    }
}
