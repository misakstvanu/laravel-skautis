<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationDetailGrantOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $eventEducation = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $unitRegistrationNumber = null,
        public readonly ?int $estimatedParticipantCount = null,
        public readonly ?float $estimatedCost = null,
        public readonly ?float $finalGrant = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            eventEducation: isset($obj->{'EventEducation'}) ? (string) $obj->{'EventEducation'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            unitRegistrationNumber: isset($obj->{'UnitRegistrationNumber'}) ? (string) $obj->{'UnitRegistrationNumber'} : null,
            estimatedParticipantCount: isset($obj->{'EstimatedParticipantCount'}) ? (int) $obj->{'EstimatedParticipantCount'} : null,
            estimatedCost: isset($obj->{'EstimatedCost'}) ? (float) $obj->{'EstimatedCost'} : null,
            finalGrant: isset($obj->{'FinalGrant'}) ? (float) $obj->{'FinalGrant'} : null,
        );
    }
}
