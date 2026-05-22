<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class SettingsAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $value = null,
        public readonly ?string $note = null,
        public readonly ?int $idSettingsGroup = null,
        public readonly ?string $settingsGroup = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            value: isset($obj->{'Value'}) ? (string) $obj->{'Value'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            idSettingsGroup: isset($obj->{'ID_SettingsGroup'}) ? (int) $obj->{'ID_SettingsGroup'} : null,
            settingsGroup: isset($obj->{'SettingsGroup'}) ? (string) $obj->{'SettingsGroup'} : null,
        );
    }
}
