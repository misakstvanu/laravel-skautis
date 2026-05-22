<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class SyncSettingsSyncContactTypeAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGoogleGroupSyncSettings = null,
        public readonly ?string $idSyncContactType = null,
        public readonly ?string $syncContactType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGoogleGroupSyncSettings: isset($obj->{'ID_GoogleGroupSyncSettings'}) ? (int) $obj->{'ID_GoogleGroupSyncSettings'} : null,
            idSyncContactType: isset($obj->{'ID_SyncContactType'}) ? (string) $obj->{'ID_SyncContactType'} : null,
            syncContactType: isset($obj->{'SyncContactType'}) ? (string) $obj->{'SyncContactType'} : null,
        );
    }
}
