<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class AccommodationCapacityAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idAccommodation = null,
        public readonly ?string $accommodation = null,
        public readonly ?string $date = null,
        public readonly ?string $dateDisplayName = null,
        public readonly ?int $capacity = null,
        public readonly ?int $occupy = null,
        public readonly ?int $capacityLeft = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idAccommodation: isset($obj->{'ID_Accommodation'}) ? (int) $obj->{'ID_Accommodation'} : null,
            accommodation: isset($obj->{'Accommodation'}) ? (string) $obj->{'Accommodation'} : null,
            date: isset($obj->{'Date'}) ? (string) $obj->{'Date'} : null,
            dateDisplayName: isset($obj->{'DateDisplayName'}) ? (string) $obj->{'DateDisplayName'} : null,
            capacity: isset($obj->{'Capacity'}) ? (int) $obj->{'Capacity'} : null,
            occupy: isset($obj->{'Occupy'}) ? (int) $obj->{'Occupy'} : null,
            capacityLeft: isset($obj->{'CapacityLeft'}) ? (int) $obj->{'CapacityLeft'} : null,
        );
    }
}
