<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class GoogleGroupSyncSettingsDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idGoogleGroup = null,
        public readonly ?string $googleGroup = null,
        public readonly ?string $idSyncLevelType = null,
        public readonly ?string $syncLevelType = null,
        public readonly ?bool $isFunction = null,
        public readonly ?int $int = null,
        public readonly ?string $string = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $displayName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGoogleGroup: isset($obj->{'ID_GoogleGroup'}) ? (int) $obj->{'ID_GoogleGroup'} : null,
            googleGroup: isset($obj->{'GoogleGroup'}) ? (string) $obj->{'GoogleGroup'} : null,
            idSyncLevelType: isset($obj->{'ID_SyncLevelType'}) ? (string) $obj->{'ID_SyncLevelType'} : null,
            syncLevelType: isset($obj->{'SyncLevelType'}) ? (string) $obj->{'SyncLevelType'} : null,
            isFunction: isset($obj->{'IsFunction'}) ? (bool) $obj->{'IsFunction'} : null,
            int: isset($obj->{'int'}) ? (int) $obj->{'int'} : null,
            string: isset($obj->{'string'}) ? (string) $obj->{'string'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            idUnitType: isset($obj->{'ID_UnitType'}) ? (string) $obj->{'ID_UnitType'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
        );
    }
}
