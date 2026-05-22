<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationAllGrantOverviewOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $grantCode = null,
        public readonly ?string $displayName = null,
        public readonly ?string $startDate = null,
        public readonly ?string $endDate = null,
        public readonly ?int $days = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $locations = null,
        public readonly ?int $participants = null,
        public readonly ?float $grant = null,
        public readonly ?float $costs = null,
        public readonly ?float $resources = null,
        public readonly ?float $ratio = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            grantCode: isset($obj->{'GrantCode'}) ? (string) $obj->{'GrantCode'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            startDate: isset($obj->{'StartDate'}) ? (string) $obj->{'StartDate'} : null,
            endDate: isset($obj->{'EndDate'}) ? (string) $obj->{'EndDate'} : null,
            days: isset($obj->{'Days'}) ? (int) $obj->{'Days'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            locations: isset($obj->{'Locations'}) ? (string) $obj->{'Locations'} : null,
            participants: isset($obj->{'Participants'}) ? (int) $obj->{'Participants'} : null,
            grant: isset($obj->{'Grant'}) ? (float) $obj->{'Grant'} : null,
            costs: isset($obj->{'Costs'}) ? (float) $obj->{'Costs'} : null,
            resources: isset($obj->{'Resources'}) ? (float) $obj->{'Resources'} : null,
            ratio: isset($obj->{'Ratio'}) ? (float) $obj->{'Ratio'} : null,
        );
    }
}
