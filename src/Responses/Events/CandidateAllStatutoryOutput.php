<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class CandidateAllStatutoryOutput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idPersonWith = null,
        public readonly ?string $personWith = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idPersonWith: isset($obj->{'ID_PersonWith'}) ? (int) $obj->{'ID_PersonWith'} : null,
            personWith: isset($obj->{'PersonWith'}) ? (string) $obj->{'PersonWith'} : null,
        );
    }
}
