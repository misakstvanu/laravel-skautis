<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationAllPublicInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?float $gpsLatitude = null,
        public readonly ?float $gpsLongitude = null,
        public readonly ?int $distance = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idEventEducationGroup = null,
        public readonly ?bool $isQualificationExam = null,
        public readonly ?string $idRegionList = null,
        public readonly ?string $idDistrictList = null,
        public readonly ?string $from = null,
        public readonly ?string $to = null,
        public readonly ?string $startsTo = null,
        public readonly ?string $endsTo = null,
        public readonly ?float $participantFeeFrom = null,
        public readonly ?float $participantFeeTo = null,
        public readonly ?float $durationFrom = null,
        public readonly ?float $durationTo = null,
        public readonly ?float $participantCountFrom = null,
        public readonly ?float $participantCountTo = null,
        public readonly ?bool $isApproved = null,
        public readonly ?string $idOccupancyList = null,
        public readonly ?bool $isRegistrationOpen = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'GpsLatitude' => $this->gpsLatitude,
            'GpsLongitude' => $this->gpsLongitude,
            'Distance' => $this->distance,
            'EventEducationType' => $this->eventEducationType,
            'DisplayName' => $this->displayName,
            'ID_EventEducationGroup' => $this->idEventEducationGroup,
            'IsQualificationExam' => $this->isQualificationExam,
            'ID_RegionList' => $this->idRegionList,
            'ID_DistrictList' => $this->idDistrictList,
            'From' => $this->from,
            'To' => $this->to,
            'StartsTo' => $this->startsTo,
            'EndsTo' => $this->endsTo,
            'ParticipantFeeFrom' => $this->participantFeeFrom,
            'ParticipantFeeTo' => $this->participantFeeTo,
            'DurationFrom' => $this->durationFrom,
            'DurationTo' => $this->durationTo,
            'ParticipantCountFrom' => $this->participantCountFrom,
            'ParticipantCountTo' => $this->participantCountTo,
            'IsApproved' => $this->isApproved,
            'ID_OccupancyList' => $this->idOccupancyList,
            'IsRegistrationOpen' => $this->isRegistrationOpen,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
