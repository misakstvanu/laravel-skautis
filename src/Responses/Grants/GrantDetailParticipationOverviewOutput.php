<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantDetailParticipationOverviewOutput
{
    public function __construct(
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?int $participantCount = null,
        public readonly ?int $courseLength = null,
        public readonly ?int $personDays = null,
        public readonly ?float $grantAmount = null,
        public readonly ?float $maxGrant = null,
        public readonly ?float $realRequestedGrant = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idEventEducationType: isset($obj->{'ID_EventEducationType'}) ? (int) $obj->{'ID_EventEducationType'} : null,
            eventEducationType: isset($obj->{'EventEducationType'}) ? (string) $obj->{'EventEducationType'} : null,
            participantCount: isset($obj->{'ParticipantCount'}) ? (int) $obj->{'ParticipantCount'} : null,
            courseLength: isset($obj->{'CourseLength'}) ? (int) $obj->{'CourseLength'} : null,
            personDays: isset($obj->{'PersonDays'}) ? (int) $obj->{'PersonDays'} : null,
            grantAmount: isset($obj->{'GrantAmount'}) ? (float) $obj->{'GrantAmount'} : null,
            maxGrant: isset($obj->{'MaxGrant'}) ? (float) $obj->{'MaxGrant'} : null,
            realRequestedGrant: isset($obj->{'RealRequestedGrant'}) ? (float) $obj->{'RealRequestedGrant'} : null,
        );
    }
}
