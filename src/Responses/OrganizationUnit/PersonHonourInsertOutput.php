<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonHonourInsertOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
        );
    }
}
