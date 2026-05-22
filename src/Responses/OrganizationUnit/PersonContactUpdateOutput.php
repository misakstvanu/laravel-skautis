<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonContactUpdateOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPersonContactRequest = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPersonContactRequest: isset($obj->{'ID_PersonContactRequest'}) ? (int) $obj->{'ID_PersonContactRequest'} : null,
        );
    }
}
