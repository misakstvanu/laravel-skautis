<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class AuditRegisterItemAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnitAuditRegister = null,
        public readonly ?string $idAuditRegisterItemType = null,
        public readonly ?string $auditRegisterItemType = null,
        public readonly ?string $auditRegisterItemTypeHelp = null,
        public readonly ?string $done = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $comment = null,
        public readonly ?bool $isDone = null,
        public readonly ?string $doneText = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnitAuditRegister: isset($obj->{'ID_UnitAuditRegister'}) ? (int) $obj->{'ID_UnitAuditRegister'} : null,
            idAuditRegisterItemType: isset($obj->{'ID_AuditRegisterItemType'}) ? (string) $obj->{'ID_AuditRegisterItemType'} : null,
            auditRegisterItemType: isset($obj->{'AuditRegisterItemType'}) ? (string) $obj->{'AuditRegisterItemType'} : null,
            auditRegisterItemTypeHelp: isset($obj->{'AuditRegisterItemTypeHelp'}) ? (string) $obj->{'AuditRegisterItemTypeHelp'} : null,
            done: isset($obj->{'Done'}) ? (string) $obj->{'Done'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            comment: isset($obj->{'Comment'}) ? (string) $obj->{'Comment'} : null,
            isDone: isset($obj->{'IsDone'}) ? (bool) $obj->{'IsDone'} : null,
            doneText: isset($obj->{'DoneText'}) ? (string) $obj->{'DoneText'} : null,
        );
    }
}
