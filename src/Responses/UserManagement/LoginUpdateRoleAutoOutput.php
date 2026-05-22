<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class LoginUpdateRoleAutoOutput
{
    public function __construct(
        public readonly ?int $newRole = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            newRole: isset($obj->{'NewRole'}) ? (int) $obj->{'NewRole'} : null,
        );
    }
}
