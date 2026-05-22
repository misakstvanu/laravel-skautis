<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class PluginDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isEnabled = null,
        public readonly ?string $description = null,
        public readonly ?string $instanceKey = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            isEnabled: isset($obj->{'IsEnabled'}) ? (bool) $obj->{'IsEnabled'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            instanceKey: isset($obj->{'InstanceKey'}) ? (string) $obj->{'InstanceKey'} : null,
        );
    }
}
