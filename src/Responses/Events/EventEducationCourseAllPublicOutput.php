<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationCourseAllPublicOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?string $eventEducation = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?int $idOccupancy = null,
        public readonly ?string $occupancy = null,
        public readonly ?int $capacityCourse = null,
        public readonly ?int $capacitySubstitute = null,
        public readonly ?string $registrationDeadline = null,
        public readonly ?bool $hasFreeSlots = null,
        public readonly ?float $fulfillment = null,
        public readonly ?string $displayName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventEducation: isset($obj->{'ID_EventEducation'}) ? (int) $obj->{'ID_EventEducation'} : null,
            eventEducation: isset($obj->{'EventEducation'}) ? (string) $obj->{'EventEducation'} : null,
            idEventEducationType: isset($obj->{'ID_EventEducationType'}) ? (int) $obj->{'ID_EventEducationType'} : null,
            eventEducationType: isset($obj->{'EventEducationType'}) ? (string) $obj->{'EventEducationType'} : null,
            idOccupancy: isset($obj->{'ID_Occupancy'}) ? (int) $obj->{'ID_Occupancy'} : null,
            occupancy: isset($obj->{'Occupancy'}) ? (string) $obj->{'Occupancy'} : null,
            capacityCourse: isset($obj->{'CapacityCourse'}) ? (int) $obj->{'CapacityCourse'} : null,
            capacitySubstitute: isset($obj->{'CapacitySubstitute'}) ? (int) $obj->{'CapacitySubstitute'} : null,
            registrationDeadline: isset($obj->{'RegistrationDeadline'}) ? (string) $obj->{'RegistrationDeadline'} : null,
            hasFreeSlots: isset($obj->{'HasFreeSlots'}) ? (bool) $obj->{'HasFreeSlots'} : null,
            fulfillment: isset($obj->{'Fulfillment'}) ? (float) $obj->{'Fulfillment'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
        );
    }
}
