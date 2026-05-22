<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class GoogleGroupSyncRequestAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGoogleGroup = null,
        public readonly ?string $googleGroup = null,
        public readonly ?string $created = null,
        public readonly ?string $synced = null,
        public readonly ?bool $isSyncing = null,
        public readonly ?string $exception = null,
        public readonly ?string $email = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGoogleGroup: isset($obj->{'ID_GoogleGroup'}) ? (int) $obj->{'ID_GoogleGroup'} : null,
            googleGroup: isset($obj->{'GoogleGroup'}) ? (string) $obj->{'GoogleGroup'} : null,
            created: isset($obj->{'Created'}) ? (string) $obj->{'Created'} : null,
            synced: isset($obj->{'Synced'}) ? (string) $obj->{'Synced'} : null,
            isSyncing: isset($obj->{'IsSyncing'}) ? (bool) $obj->{'IsSyncing'} : null,
            exception: isset($obj->{'Exception'}) ? (string) $obj->{'Exception'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
        );
    }
}
