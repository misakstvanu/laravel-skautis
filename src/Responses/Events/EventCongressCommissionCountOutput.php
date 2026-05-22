<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCongressCommissionCountOutput
{
    public function __construct(
        public readonly ?int $commissionCount = null,
        public readonly ?int $commissionCountLimit = null,
        public readonly ?bool $isLeader = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            commissionCount: isset($obj->{'CommissionCount'}) ? (int) $obj->{'CommissionCount'} : null,
            commissionCountLimit: isset($obj->{'CommissionCountLimit'}) ? (int) $obj->{'CommissionCountLimit'} : null,
            isLeader: isset($obj->{'IsLeader'}) ? (bool) $obj->{'IsLeader'} : null,
        );
    }
}
