<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantAllSummaryOutput
{
    public function __construct(
        public readonly ?float $grantBudget = null,
        public readonly ?float $grantUnallocated = null,
        public readonly ?float $grantAllocated = null,
        public readonly ?float $grantToReturn = null,
        public readonly ?float $grantRequested = null,
        public readonly ?float $grantApproved = null,
        public readonly ?float $grantNotApproved = null,
        public readonly ?float $grantMax = null,
        public readonly ?float $grantUsed = null,
        public readonly ?float $grantAdvanceSent = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            grantBudget: isset($obj->{'GrantBudget'}) ? (float) $obj->{'GrantBudget'} : null,
            grantUnallocated: isset($obj->{'GrantUnallocated'}) ? (float) $obj->{'GrantUnallocated'} : null,
            grantAllocated: isset($obj->{'GrantAllocated'}) ? (float) $obj->{'GrantAllocated'} : null,
            grantToReturn: isset($obj->{'GrantToReturn'}) ? (float) $obj->{'GrantToReturn'} : null,
            grantRequested: isset($obj->{'GrantRequested'}) ? (float) $obj->{'GrantRequested'} : null,
            grantApproved: isset($obj->{'GrantApproved'}) ? (float) $obj->{'GrantApproved'} : null,
            grantNotApproved: isset($obj->{'GrantNotApproved'}) ? (float) $obj->{'GrantNotApproved'} : null,
            grantMax: isset($obj->{'GrantMax'}) ? (float) $obj->{'GrantMax'} : null,
            grantUsed: isset($obj->{'GrantUsed'}) ? (float) $obj->{'GrantUsed'} : null,
            grantAdvanceSent: isset($obj->{'GrantAdvanceSent'}) ? (float) $obj->{'GrantAdvanceSent'} : null,
        );
    }
}
