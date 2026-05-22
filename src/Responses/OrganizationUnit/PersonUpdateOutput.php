<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonUpdateOutput
{
    public function __construct(
        public readonly ?bool $photoResized = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            photoResized: isset($obj->{'PhotoResized'}) ? (bool) $obj->{'PhotoResized'} : null,
        );
    }
}
