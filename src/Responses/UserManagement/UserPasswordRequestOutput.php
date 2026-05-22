<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class UserPasswordRequestOutput
{
    public function __construct(
        public readonly ?string $status = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            status: isset($obj->{'Status'}) ? (string) $obj->{'Status'} : null,
        );
    }
}
