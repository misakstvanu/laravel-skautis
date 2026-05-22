<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantDetailGrantStatementOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?float $totalCosts = null,
        public readonly ?float $totalRevenue = null,
        public readonly ?bool $hasGrant = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            totalCosts: isset($obj->{'TotalCosts'}) ? (float) $obj->{'TotalCosts'} : null,
            totalRevenue: isset($obj->{'TotalRevenue'}) ? (float) $obj->{'TotalRevenue'} : null,
            hasGrant: isset($obj->{'HasGrant'}) ? (bool) $obj->{'HasGrant'} : null,
        );
    }
}
