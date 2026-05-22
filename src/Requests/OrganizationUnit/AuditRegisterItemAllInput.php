<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class AuditRegisterItemAllInput
{
    public function __construct(
        public readonly ?int $idUnitAuditRegister = null,
        public readonly ?int $id = null,
        public readonly ?string $idAuditRegisterItemType = null,
        public readonly ?int $idPerson = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_UnitAuditRegister' => $this->idUnitAuditRegister,
            'ID' => $this->id,
            'ID_AuditRegisterItemType' => $this->idAuditRegisterItemType,
            'ID_Person' => $this->idPerson,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
