<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class OccupationRentLanguageAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idOccupationRent = null,
        public readonly ?string $occupationRent = null,
        public readonly ?string $idOccupationLanguage = null,
        public readonly ?string $occupationLanguage = null,
        public readonly ?string $occupationLanguageShort = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idOccupationRent: isset($obj->{'ID_OccupationRent'}) ? (int) $obj->{'ID_OccupationRent'} : null,
            occupationRent: isset($obj->{'OccupationRent'}) ? (string) $obj->{'OccupationRent'} : null,
            idOccupationLanguage: isset($obj->{'ID_OccupationLanguage'}) ? (string) $obj->{'ID_OccupationLanguage'} : null,
            occupationLanguage: isset($obj->{'OccupationLanguage'}) ? (string) $obj->{'OccupationLanguage'} : null,
            occupationLanguageShort: isset($obj->{'OccupationLanguageShort'}) ? (string) $obj->{'OccupationLanguageShort'} : null,
        );
    }
}
