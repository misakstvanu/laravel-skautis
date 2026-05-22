<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCampStatisticDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idEventCamp = null,
        public readonly ?bool $isEstimate = null,
        public readonly ?int $benjaminci = null,
        public readonly ?int $vlce = null,
        public readonly ?int $svetluska = null,
        public readonly ?int $skaut = null,
        public readonly ?int $skautka = null,
        public readonly ?int $rover = null,
        public readonly ?int $ranger = null,
        public readonly ?int $adultFemale = null,
        public readonly ?int $adultMale = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventCamp: isset($obj->{'ID_EventCamp'}) ? (int) $obj->{'ID_EventCamp'} : null,
            isEstimate: isset($obj->{'IsEstimate'}) ? (bool) $obj->{'IsEstimate'} : null,
            benjaminci: isset($obj->{'Benjaminci'}) ? (int) $obj->{'Benjaminci'} : null,
            vlce: isset($obj->{'Vlce'}) ? (int) $obj->{'Vlce'} : null,
            svetluska: isset($obj->{'Svetluska'}) ? (int) $obj->{'Svetluska'} : null,
            skaut: isset($obj->{'Skaut'}) ? (int) $obj->{'Skaut'} : null,
            skautka: isset($obj->{'Skautka'}) ? (int) $obj->{'Skautka'} : null,
            rover: isset($obj->{'Rover'}) ? (int) $obj->{'Rover'} : null,
            ranger: isset($obj->{'Ranger'}) ? (int) $obj->{'Ranger'} : null,
            adultFemale: isset($obj->{'AdultFemale'}) ? (int) $obj->{'AdultFemale'} : null,
            adultMale: isset($obj->{'AdultMale'}) ? (int) $obj->{'AdultMale'} : null,
        );
    }
}
