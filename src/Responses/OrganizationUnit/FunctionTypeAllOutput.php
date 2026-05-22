<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class FunctionTypeAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $code = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $unitType = null,
        public readonly ?int $idRole = null,
        public readonly ?string $role = null,
        public readonly ?int $minCount = null,
        public readonly ?int $maxCount = null,
        public readonly ?string $note = null,
        public readonly ?bool $isStatutory = null,
        public readonly ?bool $isAssistant = null,
        public readonly ?bool $isAudit = null,
        public readonly ?bool $isOficial = null,
        public readonly ?bool $isElective = null,
        public readonly ?bool $isNotCongress = null,
        public readonly ?bool $isSpecification = null,
        public readonly ?int $order = null,
        public readonly ?string $agencyCode = null,
        public readonly ?string $shortName = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            code: isset($obj->{'Code'}) ? (string) $obj->{'Code'} : null,
            idUnitType: isset($obj->{'ID_UnitType'}) ? (string) $obj->{'ID_UnitType'} : null,
            unitType: isset($obj->{'UnitType'}) ? (string) $obj->{'UnitType'} : null,
            idRole: isset($obj->{'ID_Role'}) ? (int) $obj->{'ID_Role'} : null,
            role: isset($obj->{'Role'}) ? (string) $obj->{'Role'} : null,
            minCount: isset($obj->{'MinCount'}) ? (int) $obj->{'MinCount'} : null,
            maxCount: isset($obj->{'MaxCount'}) ? (int) $obj->{'MaxCount'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            isStatutory: isset($obj->{'IsStatutory'}) ? (bool) $obj->{'IsStatutory'} : null,
            isAssistant: isset($obj->{'IsAssistant'}) ? (bool) $obj->{'IsAssistant'} : null,
            isAudit: isset($obj->{'IsAudit'}) ? (bool) $obj->{'IsAudit'} : null,
            isOficial: isset($obj->{'IsOficial'}) ? (bool) $obj->{'IsOficial'} : null,
            isElective: isset($obj->{'IsElective'}) ? (bool) $obj->{'IsElective'} : null,
            isNotCongress: isset($obj->{'IsNotCongress'}) ? (bool) $obj->{'IsNotCongress'} : null,
            isSpecification: isset($obj->{'IsSpecification'}) ? (bool) $obj->{'IsSpecification'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
            agencyCode: isset($obj->{'AgencyCode'}) ? (string) $obj->{'AgencyCode'} : null,
            shortName: isset($obj->{'ShortName'}) ? (string) $obj->{'ShortName'} : null,
        );
    }
}
