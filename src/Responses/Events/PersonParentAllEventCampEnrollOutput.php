<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class PersonParentAllEventCampEnrollOutput
{
    public function __construct(
        public readonly ?string $personParent = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            personParent: isset($obj->{'PersonParent'}) ? (string) $obj->{'PersonParent'} : null,
        );
    }
}
