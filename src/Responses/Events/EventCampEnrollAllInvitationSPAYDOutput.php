<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCampEnrollAllInvitationSPAYDOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventCamp = null,
        public readonly ?string $sPAYD = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventCamp: isset($obj->{'ID_EventCamp'}) ? (int) $obj->{'ID_EventCamp'} : null,
            sPAYD: isset($obj->{'SPAYD'}) ? (string) $obj->{'SPAYD'} : null,
        );
    }
}
