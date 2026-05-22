<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class LoginUpdateRefreshOutput
{
    public function __construct(
        public readonly ?string $dateLogout = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            dateLogout: isset($obj->{'DateLogout'}) ? (string) $obj->{'DateLogout'} : null,
        );
    }
}
