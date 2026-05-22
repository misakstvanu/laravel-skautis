<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class PersonAccommodationAllOutput
{
    public function __construct(
        public readonly ?string $day = null,
        public readonly ?int $id = null,
        public readonly ?int $idAccommodation = null,
        public readonly ?string $accommodation = null,
        public readonly ?string $note = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $noAccommodation = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            day: isset($obj->{'Day'}) ? (string) $obj->{'Day'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idAccommodation: isset($obj->{'ID_Accommodation'}) ? (int) $obj->{'ID_Accommodation'} : null,
            accommodation: isset($obj->{'Accommodation'}) ? (string) $obj->{'Accommodation'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            noAccommodation: isset($obj->{'NoAccommodation'}) ? (bool) $obj->{'NoAccommodation'} : null,
        );
    }
}
