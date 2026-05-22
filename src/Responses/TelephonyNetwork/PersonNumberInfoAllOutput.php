<?php

namespace Misakstvanu\LaravelSkautis\Responses\TelephonyNetwork;

final class PersonNumberInfoAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $numberCount = null,
        public readonly ?string $date = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            numberCount: isset($obj->{'NumberCount'}) ? (int) $obj->{'NumberCount'} : null,
            date: isset($obj->{'Date'}) ? (string) $obj->{'Date'} : null,
        );
    }
}
