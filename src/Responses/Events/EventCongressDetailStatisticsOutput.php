<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCongressDetailStatisticsOutput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?int $count = null,
        public readonly ?string $group = null,
        public readonly ?string $subgroup = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            count: isset($obj->{'Count'}) ? (int) $obj->{'Count'} : null,
            group: isset($obj->{'Group'}) ? (string) $obj->{'Group'} : null,
            subgroup: isset($obj->{'Subgroup'}) ? (string) $obj->{'Subgroup'} : null,
        );
    }
}
