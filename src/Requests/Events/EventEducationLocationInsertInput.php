<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationLocationInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $isActive = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idRegion = null,
        public readonly ?string $region = null,
        public readonly ?string $street = null,
        public readonly ?string $postcode = null,
        public readonly ?string $city = null,
        public readonly ?float $latitude = null,
        public readonly ?float $longitude = null,
        public readonly ?string $note = null,
        public readonly ?string $firstLine = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'IsActive' => $this->isActive,
            'ID_EventEducation' => $this->idEventEducation,
            'DisplayName' => $this->displayName,
            'ID_Region' => $this->idRegion,
            'Region' => $this->region,
            'Street' => $this->street,
            'Postcode' => $this->postcode,
            'City' => $this->city,
            'Latitude' => $this->latitude,
            'Longitude' => $this->longitude,
            'Note' => $this->note,
            'FirstLine' => $this->firstLine,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
