<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationCourseTermUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idEventEducationCourseType = null,
        public readonly ?int $idEventEducationCourse = null,
        public readonly ?int $idEventEducationTerm = null,
        public readonly ?string $dateFrom = null,
        public readonly ?string $dateTo = null,
        public readonly ?string $termNote = null,
        public readonly ?int $idEventEducationLocation = null,
        public readonly ?string $firstLine = null,
        public readonly ?string $region = null,
        public readonly ?string $idRegion = null,
        public readonly ?string $street = null,
        public readonly ?string $postcode = null,
        public readonly ?string $city = null,
        public readonly ?float $longitude = null,
        public readonly ?float $latitude = null,
        public readonly ?string $locationNote = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventEducationCourseType' => $this->idEventEducationCourseType,
            'ID_EventEducationCourse' => $this->idEventEducationCourse,
            'ID_EventEducationTerm' => $this->idEventEducationTerm,
            'DateFrom' => $this->dateFrom,
            'DateTo' => $this->dateTo,
            'TermNote' => $this->termNote,
            'ID_EventEducationLocation' => $this->idEventEducationLocation,
            'FirstLine' => $this->firstLine,
            'Region' => $this->region,
            'ID_Region' => $this->idRegion,
            'Street' => $this->street,
            'Postcode' => $this->postcode,
            'City' => $this->city,
            'Longitude' => $this->longitude,
            'Latitude' => $this->latitude,
            'LocationNote' => $this->locationNote,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
