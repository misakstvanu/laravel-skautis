<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class SyncSettingsEmailAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGoogleGroup = null,
        public readonly ?string $displayName = null,
        public readonly ?string $googleGroup = null,
        public readonly ?string $email = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGoogleGroup: isset($obj->{'ID_GoogleGroup'}) ? (int) $obj->{'ID_GoogleGroup'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            googleGroup: isset($obj->{'GoogleGroup'}) ? (string) $obj->{'GoogleGroup'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
        );
    }
}
