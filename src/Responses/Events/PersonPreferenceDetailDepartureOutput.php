<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class PersonPreferenceDetailDepartureOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?string $eventCongress = null,
        public readonly ?string $person = null,
        public readonly ?int $idEventCongress = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $departure = null,
        public readonly ?bool $noDeparture = null,
        public readonly ?string $displayName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            eventCongress: isset($obj->{'EventCongress'}) ? (string) $obj->{'EventCongress'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idEventCongress: isset($obj->{'ID_EventCongress'}) ? (int) $obj->{'ID_EventCongress'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            departure: isset($obj->{'Departure'}) ? (string) $obj->{'Departure'} : null,
            noDeparture: isset($obj->{'NoDeparture'}) ? (bool) $obj->{'NoDeparture'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
        );
    }
}
