<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantAllHeadquartersUnorganizedYouthOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
        );
    }
}
