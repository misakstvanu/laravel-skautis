<?php

namespace Misakstvanu\LaravelSkautis\Responses\GoogleApps;

final class DomainAdminAllPersonOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idDomain = null,
        public readonly ?string $domain = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idDomain: isset($obj->{'ID_Domain'}) ? (int) $obj->{'ID_Domain'} : null,
            domain: isset($obj->{'Domain'}) ? (string) $obj->{'Domain'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
        );
    }
}
