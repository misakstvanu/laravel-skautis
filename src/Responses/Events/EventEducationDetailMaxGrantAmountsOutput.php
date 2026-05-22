<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationDetailMaxGrantAmountsOutput
{
    public function __construct(
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?int $courseLength = null,
        public readonly ?int $estimatedParticipantCount = null,
        public readonly ?int $estimatedPersonDays = null,
        public readonly ?float $estimatedGrantAmount = null,
        public readonly ?float $estimatedMaxGrant = null,
        public readonly ?int $realParticipantCount = null,
        public readonly ?int $realPersonDays = null,
        public readonly ?float $realGrantAmount = null,
        public readonly ?float $realMaxGrant = null,
        public readonly ?float $realRequestedGrant = null,
        public readonly ?bool $isCustomPersonDays = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idEventEducationType: isset($obj->{'ID_EventEducationType'}) ? (int) $obj->{'ID_EventEducationType'} : null,
            eventEducationType: isset($obj->{'EventEducationType'}) ? (string) $obj->{'EventEducationType'} : null,
            courseLength: isset($obj->{'CourseLength'}) ? (int) $obj->{'CourseLength'} : null,
            estimatedParticipantCount: isset($obj->{'EstimatedParticipantCount'}) ? (int) $obj->{'EstimatedParticipantCount'} : null,
            estimatedPersonDays: isset($obj->{'EstimatedPersonDays'}) ? (int) $obj->{'EstimatedPersonDays'} : null,
            estimatedGrantAmount: isset($obj->{'EstimatedGrantAmount'}) ? (float) $obj->{'EstimatedGrantAmount'} : null,
            estimatedMaxGrant: isset($obj->{'EstimatedMaxGrant'}) ? (float) $obj->{'EstimatedMaxGrant'} : null,
            realParticipantCount: isset($obj->{'RealParticipantCount'}) ? (int) $obj->{'RealParticipantCount'} : null,
            realPersonDays: isset($obj->{'RealPersonDays'}) ? (int) $obj->{'RealPersonDays'} : null,
            realGrantAmount: isset($obj->{'RealGrantAmount'}) ? (float) $obj->{'RealGrantAmount'} : null,
            realMaxGrant: isset($obj->{'RealMaxGrant'}) ? (float) $obj->{'RealMaxGrant'} : null,
            realRequestedGrant: isset($obj->{'RealRequestedGrant'}) ? (float) $obj->{'RealRequestedGrant'} : null,
            isCustomPersonDays: isset($obj->{'IsCustomPersonDays'}) ? (bool) $obj->{'IsCustomPersonDays'} : null,
        );
    }
}
