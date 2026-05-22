<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class InstanceDetailOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isActual = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            isActual: isset($obj->{'IsActual'}) ? (bool) $obj->{'IsActual'} : null,
        );
    }
}
