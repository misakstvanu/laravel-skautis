<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitInsertUnitOutput
{
    public function __construct(
        public readonly ?int $id = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
        );
    }
}
