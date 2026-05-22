<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class PermissionAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idGroupType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idGroupType: isset($obj->{'ID_GroupType'}) ? (string) $obj->{'ID_GroupType'} : null,
        );
    }
}
