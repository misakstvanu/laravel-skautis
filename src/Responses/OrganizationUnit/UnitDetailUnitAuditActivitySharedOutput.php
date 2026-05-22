<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitDetailUnitAuditActivitySharedOutput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $unitAuditFunctionPersons = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            unitAuditFunctionPersons: isset($obj->{'UnitAuditFunctionPersons'}) ? (string) $obj->{'UnitAuditFunctionPersons'} : null,
        );
    }
}
