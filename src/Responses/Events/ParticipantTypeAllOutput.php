<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class ParticipantTypeAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $idEventType = null,
        public readonly ?bool $isManual = null,
        public readonly ?string $displayName = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            idEventType: isset($obj->{'ID_EventType'}) ? (string) $obj->{'ID_EventType'} : null,
            isManual: isset($obj->{'IsManual'}) ? (bool) $obj->{'IsManual'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
