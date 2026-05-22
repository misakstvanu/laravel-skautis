<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonChangeInsertPersonParentOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $code = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            code: isset($obj->{'Code'}) ? (string) $obj->{'Code'} : null,
        );
    }
}
