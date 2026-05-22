<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCampEnrollAllExportEnrollOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventCamp = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $campOnlineLogin = null,
        public readonly ?string $person = null,
        public readonly ?int $personBirthYear = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventCamp: isset($obj->{'ID_EventCamp'}) ? (int) $obj->{'ID_EventCamp'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            campOnlineLogin: isset($obj->{'CampOnlineLogin'}) ? (string) $obj->{'CampOnlineLogin'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            personBirthYear: isset($obj->{'PersonBirthYear'}) ? (int) $obj->{'PersonBirthYear'} : null,
        );
    }
}
