<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class PluginAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $instanceKey = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isEnabled = null,
        public readonly ?string $description = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            instanceKey: isset($obj->{'InstanceKey'}) ? (string) $obj->{'InstanceKey'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            isEnabled: isset($obj->{'IsEnabled'}) ? (bool) $obj->{'IsEnabled'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
        );
    }
}
