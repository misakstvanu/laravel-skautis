<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitAuditorDetailOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?int $idRegion = null,
        public readonly ?string $person = null,
        public readonly ?string $email = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            idRegion: isset($obj->{'ID_Region'}) ? (int) $obj->{'ID_Region'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
        );
    }
}
