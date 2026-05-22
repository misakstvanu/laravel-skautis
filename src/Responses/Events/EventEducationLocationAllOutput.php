<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationLocationAllOutput
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
        public readonly ?string $note = null,
        public readonly ?string $firstLine = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            idEventEducation: isset($obj->{'ID_EventEducation'}) ? (int) $obj->{'ID_EventEducation'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idRegion: isset($obj->{'ID_Region'}) ? (int) $obj->{'ID_Region'} : null,
            region: isset($obj->{'Region'}) ? (string) $obj->{'Region'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            postcode: isset($obj->{'Postcode'}) ? (string) $obj->{'Postcode'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            firstLine: isset($obj->{'FirstLine'}) ? (string) $obj->{'FirstLine'} : null,
        );
    }
}
