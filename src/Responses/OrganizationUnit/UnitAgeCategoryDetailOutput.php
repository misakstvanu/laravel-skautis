<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitAgeCategoryDetailOutput
{
    public function __construct(
        public readonly ?int $idAgeCategory = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isMore = null,
        public readonly ?string $validFrom = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idAgeCategory: isset($obj->{'ID_AgeCategory'}) ? (int) $obj->{'ID_AgeCategory'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            isMore: isset($obj->{'IsMore'}) ? (bool) $obj->{'IsMore'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
        );
    }
}
