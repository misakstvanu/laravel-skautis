<?php

namespace Misakstvanu\LaravelSkautis\Responses\DocumentStorage;

final class CloudRequestAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?int $idCloud = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            idCloud: isset($obj->{'ID_Cloud'}) ? (int) $obj->{'ID_Cloud'} : null,
        );
    }
}
