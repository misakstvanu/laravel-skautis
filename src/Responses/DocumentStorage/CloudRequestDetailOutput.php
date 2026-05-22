<?php

namespace Misakstvanu\LaravelSkautis\Responses\DocumentStorage;

final class CloudRequestDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?int $idCloud = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            idCloud: isset($obj->{'ID_Cloud'}) ? (int) $obj->{'ID_Cloud'} : null,
        );
    }
}
