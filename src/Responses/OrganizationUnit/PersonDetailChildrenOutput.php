<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonDetailChildrenOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $childrenCount = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            childrenCount: isset($obj->{'ChildrenCount'}) ? (int) $obj->{'ChildrenCount'} : null,
        );
    }
}
