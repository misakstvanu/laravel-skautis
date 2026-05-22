<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class RegistryAllMessageOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $export = null,
        public readonly ?int $idUnit = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            export: isset($obj->{'Export'}) ? (bool) $obj->{'Export'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
        );
    }
}
