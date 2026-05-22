<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonAllGoogleGroupSyncOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idSyncSettingsEmail = null,
        public readonly ?string $displayName = null,
        public readonly ?string $email = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idSyncSettingsEmail: isset($obj->{'ID_SyncSettingsEmail'}) ? (int) $obj->{'ID_SyncSettingsEmail'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
        );
    }
}
