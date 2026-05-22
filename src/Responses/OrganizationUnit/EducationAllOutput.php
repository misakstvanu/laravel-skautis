<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class EducationAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idEducationType = null,
        public readonly ?string $educationType = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idEducationType: isset($obj->{'ID_EducationType'}) ? (int) $obj->{'ID_EducationType'} : null,
            educationType: isset($obj->{'EducationType'}) ? (string) $obj->{'EducationType'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
