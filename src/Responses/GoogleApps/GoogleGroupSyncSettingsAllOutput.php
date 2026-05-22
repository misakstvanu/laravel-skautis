<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class GoogleGroupSyncSettingsAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGoogleGroup = null,
        public readonly ?string $googleGroup = null,
        public readonly ?string $idSyncLevelType = null,
        public readonly ?string $syncLevelType = null,
        public readonly ?bool $isFunction = null,
        public readonly ?string $displayName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGoogleGroup: isset($obj->{'ID_GoogleGroup'}) ? (int) $obj->{'ID_GoogleGroup'} : null,
            googleGroup: isset($obj->{'GoogleGroup'}) ? (string) $obj->{'GoogleGroup'} : null,
            idSyncLevelType: isset($obj->{'ID_SyncLevelType'}) ? (string) $obj->{'ID_SyncLevelType'} : null,
            syncLevelType: isset($obj->{'SyncLevelType'}) ? (string) $obj->{'SyncLevelType'} : null,
            isFunction: isset($obj->{'IsFunction'}) ? (bool) $obj->{'IsFunction'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
        );
    }
}
