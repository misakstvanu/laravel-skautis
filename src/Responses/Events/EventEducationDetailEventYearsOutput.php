<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationDetailEventYearsOutput
{
    public function __construct(
        public readonly ?int $year = null,
        public readonly ?int $idGrant = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            idGrant: isset($obj->{'ID_Grant'}) ? (int) $obj->{'ID_Grant'} : null,
        );
    }
}
