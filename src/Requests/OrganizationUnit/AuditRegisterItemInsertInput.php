<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class AuditRegisterItemInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnitAuditRegister = null,
        public readonly ?string $idAuditRegisterItemType = null,
        public readonly ?string $auditRegisterItemType = null,
        public readonly ?string $auditRegisterItemTypeHelp = null,
        public readonly ?string $auditRegisterItemTypeCustom = null,
        public readonly ?string $done = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $comment = null,
        public readonly ?string $helpCustom = null,
        public readonly ?bool $isDone = null,
        public readonly ?string $doneText = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_UnitAuditRegister' => $this->idUnitAuditRegister,
            'ID_AuditRegisterItemType' => $this->idAuditRegisterItemType,
            'AuditRegisterItemType' => $this->auditRegisterItemType,
            'AuditRegisterItemTypeHelp' => $this->auditRegisterItemTypeHelp,
            'AuditRegisterItemTypeCustom' => $this->auditRegisterItemTypeCustom,
            'Done' => $this->done,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'Comment' => $this->comment,
            'HelpCustom' => $this->helpCustom,
            'IsDone' => $this->isDone,
            'DoneText' => $this->doneText,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
