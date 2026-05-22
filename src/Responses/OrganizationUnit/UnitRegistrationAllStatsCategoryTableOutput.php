<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitRegistrationAllStatsCategoryTableOutput
{
    public function __construct(
        public readonly mixed $dataAll = null,
        public readonly mixed $dataFirst = null,
        public readonly mixed $dataSecond = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            dataAll: $obj->{'DataAll'} ?? null,
            dataFirst: $obj->{'DataFirst'} ?? null,
            dataSecond: $obj->{'DataSecond'} ?? null,
        );
    }
}
