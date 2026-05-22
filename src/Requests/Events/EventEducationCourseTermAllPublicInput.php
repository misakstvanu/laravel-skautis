<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationCourseTermAllPublicInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?float $gpsLatitude = null,
        public readonly ?float $gpsLongitude = null,
        public readonly ?int $distance = null,
        public readonly ?int $start = null,
        public readonly ?int $end = null,
        public readonly ?int $minimalLength = null,
        public readonly ?int $maximalLength = null,
        public readonly ?string $regionList = null,
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?int $idEventEducationTerm = null,
        public readonly ?int $idEventEducation = null,
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
            'Start' => $this->start,
            'End' => $this->end,
            'MinimalLength' => $this->minimalLength,
            'MaximalLength' => $this->maximalLength,
            'RegionList' => $this->regionList,
            'ID_EventEducationCourse' => $this->idEventEducationCourse,
            'ID_EventEducationTerm' => $this->idEventEducationTerm,
            'ID_EventEducation' => $this->idEventEducation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
