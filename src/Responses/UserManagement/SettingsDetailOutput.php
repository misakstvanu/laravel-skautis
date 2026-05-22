<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class SettingsDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $value = null,
        public readonly ?string $note = null,
        public readonly ?bool $isPublic = null,
        public readonly ?bool $isAuthentized = null,
        public readonly ?string $idPermission = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            value: isset($obj->{'Value'}) ? (string) $obj->{'Value'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            isPublic: isset($obj->{'IsPublic'}) ? (bool) $obj->{'IsPublic'} : null,
            isAuthentized: isset($obj->{'IsAuthentized'}) ? (bool) $obj->{'IsAuthentized'} : null,
            idPermission: isset($obj->{'ID_Permission'}) ? (string) $obj->{'ID_Permission'} : null,
        );
    }
}
