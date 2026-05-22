<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class DegreeAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idDegreeType = null,
        public readonly ?string $degreeType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idDegreeType: isset($obj->{'ID_DegreeType'}) ? (int) $obj->{'ID_DegreeType'} : null,
            degreeType: isset($obj->{'DegreeType'}) ? (string) $obj->{'DegreeType'} : null,
        );
    }
}
