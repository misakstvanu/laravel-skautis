<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationCourseAllGrantSummaryOutput
{
    public function __construct(
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?int $capacity = null,
        public readonly ?int $participantCount = null,
        public readonly ?int $personDays = null,
        public readonly ?int $personDaysReal = null,
        public readonly ?float $invoiced = null,
        public readonly ?float $grantRate = null,
        public readonly ?float $grantRateCalculated = null,
        public readonly ?float $grantRateReal = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idEventEducationType: isset($obj->{'ID_EventEducationType'}) ? (int) $obj->{'ID_EventEducationType'} : null,
            eventEducationType: isset($obj->{'EventEducationType'}) ? (string) $obj->{'EventEducationType'} : null,
            capacity: isset($obj->{'Capacity'}) ? (int) $obj->{'Capacity'} : null,
            participantCount: isset($obj->{'ParticipantCount'}) ? (int) $obj->{'ParticipantCount'} : null,
            personDays: isset($obj->{'PersonDays'}) ? (int) $obj->{'PersonDays'} : null,
            personDaysReal: isset($obj->{'PersonDaysReal'}) ? (int) $obj->{'PersonDaysReal'} : null,
            invoiced: isset($obj->{'Invoiced'}) ? (float) $obj->{'Invoiced'} : null,
            grantRate: isset($obj->{'GrantRate'}) ? (float) $obj->{'GrantRate'} : null,
            grantRateCalculated: isset($obj->{'GrantRateCalculated'}) ? (float) $obj->{'GrantRateCalculated'} : null,
            grantRateReal: isset($obj->{'GrantRateReal'}) ? (float) $obj->{'GrantRateReal'} : null,
        );
    }
}
