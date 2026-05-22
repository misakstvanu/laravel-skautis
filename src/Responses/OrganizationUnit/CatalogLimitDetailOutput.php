<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class CatalogLimitDetailOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $weekSearch = null,
        public readonly ?int $yearSearch = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            weekSearch: isset($obj->{'WeekSearch'}) ? (int) $obj->{'WeekSearch'} : null,
            yearSearch: isset($obj->{'YearSearch'}) ? (int) $obj->{'YearSearch'} : null,
        );
    }
}
