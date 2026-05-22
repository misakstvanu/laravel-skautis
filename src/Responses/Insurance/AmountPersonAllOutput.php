<?php

namespace Misakstvanu\LaravelSkautis\Responses\Insurance;

final class AmountPersonAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?float $amount = null,
        public readonly ?int $year = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            amount: isset($obj->{'Amount'}) ? (float) $obj->{'Amount'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
