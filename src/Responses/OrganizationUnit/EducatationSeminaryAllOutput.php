<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class EducatationSeminaryAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $displayName = null,
        public readonly ?int $yearFrom = null,
        public readonly ?string $note = null,
        public readonly ?bool $isUsed = null,
        public readonly ?string $idParticipationType = null,
        public readonly ?string $participationType = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            yearFrom: isset($obj->{'YearFrom'}) ? (int) $obj->{'YearFrom'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            isUsed: isset($obj->{'IsUsed'}) ? (bool) $obj->{'IsUsed'} : null,
            idParticipationType: isset($obj->{'ID_ParticipationType'}) ? (string) $obj->{'ID_ParticipationType'} : null,
            participationType: isset($obj->{'ParticipationType'}) ? (string) $obj->{'ParticipationType'} : null,
            idEventEducationType: isset($obj->{'ID_EventEducationType'}) ? (int) $obj->{'ID_EventEducationType'} : null,
            eventEducationType: isset($obj->{'EventEducationType'}) ? (string) $obj->{'EventEducationType'} : null,
        );
    }
}
