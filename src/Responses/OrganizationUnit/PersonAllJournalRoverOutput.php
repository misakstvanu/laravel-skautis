<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonAllJournalRoverOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $birthDay = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idRoverJournalType = null,
        public readonly ?string $roverJournalType = null,
        public readonly ?string $dateCreated = null,
        public readonly ?bool $isActual = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            birthDay: isset($obj->{'BirthDay'}) ? (string) $obj->{'BirthDay'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idRoverJournalType: isset($obj->{'ID_RoverJournalType'}) ? (string) $obj->{'ID_RoverJournalType'} : null,
            roverJournalType: isset($obj->{'RoverJournalType'}) ? (string) $obj->{'RoverJournalType'} : null,
            dateCreated: isset($obj->{'DateCreated'}) ? (string) $obj->{'DateCreated'} : null,
            isActual: isset($obj->{'IsActual'}) ? (bool) $obj->{'IsActual'} : null,
        );
    }
}
