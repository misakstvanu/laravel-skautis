<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class UnitAuditActivityDetailUnitOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $idUnitAuditActivityType = null,
        public readonly ?string $unitAuditActivityType = null,
        public readonly ?int $idUnitShare = null,
        public readonly ?int $idUnitAuditor = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            idUnitAuditActivityType: isset($obj->{'ID_UnitAuditActivityType'}) ? (string) $obj->{'ID_UnitAuditActivityType'} : null,
            unitAuditActivityType: isset($obj->{'UnitAuditActivityType'}) ? (string) $obj->{'UnitAuditActivityType'} : null,
            idUnitShare: isset($obj->{'ID_UnitShare'}) ? (int) $obj->{'ID_UnitShare'} : null,
            idUnitAuditor: isset($obj->{'ID_UnitAuditor'}) ? (int) $obj->{'ID_UnitAuditor'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
        );
    }
}
