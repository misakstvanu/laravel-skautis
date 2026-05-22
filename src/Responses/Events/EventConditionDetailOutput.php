<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventConditionDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idEvent = null,
        public readonly ?string $idConditionType = null,
        public readonly ?string $date = null,
        public readonly ?int $idUser = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEvent: isset($obj->{'ID_Event'}) ? (int) $obj->{'ID_Event'} : null,
            idConditionType: isset($obj->{'ID_ConditionType'}) ? (string) $obj->{'ID_ConditionType'} : null,
            date: isset($obj->{'Date'}) ? (string) $obj->{'Date'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
