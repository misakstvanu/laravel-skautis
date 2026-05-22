<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class OccupationRentTagAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idOccupationRent = null,
        public readonly ?string $occupationRent = null,
        public readonly ?int $idOccupationTag = null,
        public readonly ?string $occupationTag = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idOccupationRent: isset($obj->{'ID_OccupationRent'}) ? (int) $obj->{'ID_OccupationRent'} : null,
            occupationRent: isset($obj->{'OccupationRent'}) ? (string) $obj->{'OccupationRent'} : null,
            idOccupationTag: isset($obj->{'ID_OccupationTag'}) ? (int) $obj->{'ID_OccupationTag'} : null,
            occupationTag: isset($obj->{'OccupationTag'}) ? (string) $obj->{'OccupationTag'} : null,
        );
    }
}
