<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class PersonPreferenceDetailTransportOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $idEventCongress = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idTransport = null,
        public readonly ?string $transport = null,
        public readonly ?bool $noTransport = null,
        public readonly ?string $eventCongress = null,
        public readonly ?string $person = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            idEventCongress: isset($obj->{'ID_EventCongress'}) ? (int) $obj->{'ID_EventCongress'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            idTransport: isset($obj->{'ID_Transport'}) ? (int) $obj->{'ID_Transport'} : null,
            transport: isset($obj->{'Transport'}) ? (string) $obj->{'Transport'} : null,
            noTransport: isset($obj->{'NoTransport'}) ? (bool) $obj->{'NoTransport'} : null,
            eventCongress: isset($obj->{'EventCongress'}) ? (string) $obj->{'EventCongress'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
        );
    }
}
