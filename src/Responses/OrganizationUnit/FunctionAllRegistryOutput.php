<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class FunctionAllRegistryOutput
{
    public function __construct(
        public readonly ?string $person = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
        );
    }
}
