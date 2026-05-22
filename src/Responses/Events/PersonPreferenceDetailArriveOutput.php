<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class PersonPreferenceDetailArriveOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $idEventCongress = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $eventCongress = null,
        public readonly ?string $person = null,
        public readonly ?string $arrive = null,
        public readonly ?bool $noArrive = null,
        public readonly ?string $displayName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            idEventCongress: isset($obj->{'ID_EventCongress'}) ? (int) $obj->{'ID_EventCongress'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            eventCongress: isset($obj->{'EventCongress'}) ? (string) $obj->{'EventCongress'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            arrive: isset($obj->{'Arrive'}) ? (string) $obj->{'Arrive'} : null,
            noArrive: isset($obj->{'NoArrive'}) ? (bool) $obj->{'NoArrive'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
        );
    }
}
