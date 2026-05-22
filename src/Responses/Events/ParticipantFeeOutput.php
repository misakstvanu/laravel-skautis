<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class ParticipantFeeOutput
{
    public function __construct(
        public readonly ?float $fee = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            fee: isset($obj->{'Fee'}) ? (float) $obj->{'Fee'} : null,
        );
    }
}
