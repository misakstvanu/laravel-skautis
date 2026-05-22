<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class AccommodationParticipantTypeAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idAccommodation = null,
        public readonly ?string $accommodation = null,
        public readonly ?string $idParticipantType = null,
        public readonly ?string $participantType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idAccommodation: isset($obj->{'ID_Accommodation'}) ? (int) $obj->{'ID_Accommodation'} : null,
            accommodation: isset($obj->{'Accommodation'}) ? (string) $obj->{'Accommodation'} : null,
            idParticipantType: isset($obj->{'ID_ParticipantType'}) ? (string) $obj->{'ID_ParticipantType'} : null,
            participantType: isset($obj->{'ParticipantType'}) ? (string) $obj->{'ParticipantType'} : null,
        );
    }
}
