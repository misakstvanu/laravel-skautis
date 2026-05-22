<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class LoginUpdateOutput
{
    public function __construct(
        public readonly ?int $idUnit = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
        );
    }
}
