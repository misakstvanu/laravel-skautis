<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class FunctionTypeUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $code = null,
        public readonly ?string $idUnitType = null,
        public readonly ?int $idRole = null,
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
        public readonly ?bool $isAgencyMember = null,
        public readonly ?bool $isAgencyLeader = null,
        public readonly ?int $idAgency = null,
        public readonly ?string $agency = null,
        public readonly ?int $order = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'Code' => $this->code,
            'ID_UnitType' => $this->idUnitType,
            'ID_Role' => $this->idRole,
            'MinCount' => $this->minCount,
            'MaxCount' => $this->maxCount,
            'Note' => $this->note,
            'IsStatutory' => $this->isStatutory,
            'IsAssistant' => $this->isAssistant,
            'IsAudit' => $this->isAudit,
            'IsOficial' => $this->isOficial,
            'IsElective' => $this->isElective,
            'IsNotCongress' => $this->isNotCongress,
            'IsSpecification' => $this->isSpecification,
            'IsAgencyMember' => $this->isAgencyMember,
            'IsAgencyLeader' => $this->isAgencyLeader,
            'ID_Agency' => $this->idAgency,
            'Agency' => $this->agency,
            'Order' => $this->order,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
