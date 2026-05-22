<?php

namespace Misakstvanu\LaravelSkautis\Responses\DocumentStorage;

final class DocumentClassDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idTable = null,
        public readonly ?string $table = null,
        public readonly ?string $column = null,
        public readonly ?string $idActionDetail = null,
        public readonly ?string $actionDetail = null,
        public readonly ?string $idActionEdit = null,
        public readonly ?string $actionEdit = null,
        public readonly ?string $idActionDel = null,
        public readonly ?string $actionDel = null,
        public readonly ?bool $isArchivable = null,
        public readonly ?int $validity = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idTable: isset($obj->{'ID_Table'}) ? (string) $obj->{'ID_Table'} : null,
            table: isset($obj->{'Table'}) ? (string) $obj->{'Table'} : null,
            column: isset($obj->{'Column'}) ? (string) $obj->{'Column'} : null,
            idActionDetail: isset($obj->{'ID_ActionDetail'}) ? (string) $obj->{'ID_ActionDetail'} : null,
            actionDetail: isset($obj->{'ActionDetail'}) ? (string) $obj->{'ActionDetail'} : null,
            idActionEdit: isset($obj->{'ID_ActionEdit'}) ? (string) $obj->{'ID_ActionEdit'} : null,
            actionEdit: isset($obj->{'ActionEdit'}) ? (string) $obj->{'ActionEdit'} : null,
            idActionDel: isset($obj->{'ID_ActionDel'}) ? (string) $obj->{'ID_ActionDel'} : null,
            actionDel: isset($obj->{'ActionDel'}) ? (string) $obj->{'ActionDel'} : null,
            isArchivable: isset($obj->{'IsArchivable'}) ? (bool) $obj->{'IsArchivable'} : null,
            validity: isset($obj->{'Validity'}) ? (int) $obj->{'Validity'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
