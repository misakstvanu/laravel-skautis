<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationDetailMaxGrantAmountOutput
{
    public function __construct(
        public readonly ?float $maxGrant = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            maxGrant: isset($obj->{'MaxGrant'}) ? (float) $obj->{'MaxGrant'} : null,
        );
    }
}
