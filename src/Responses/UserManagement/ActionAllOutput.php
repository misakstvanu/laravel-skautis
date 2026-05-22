<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class ActionAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idTable = null,
        public readonly ?string $table = null,
        public readonly ?string $idTableRelated = null,
        public readonly ?string $tableRelated = null,
        public readonly ?string $idOperation = null,
        public readonly ?string $operation = null,
        public readonly ?bool $requiresRecord = null,
        public readonly ?bool $isAnonymous = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idTable: isset($obj->{'ID_Table'}) ? (string) $obj->{'ID_Table'} : null,
            table: isset($obj->{'Table'}) ? (string) $obj->{'Table'} : null,
            idTableRelated: isset($obj->{'ID_TableRelated'}) ? (string) $obj->{'ID_TableRelated'} : null,
            tableRelated: isset($obj->{'TableRelated'}) ? (string) $obj->{'TableRelated'} : null,
            idOperation: isset($obj->{'ID_Operation'}) ? (string) $obj->{'ID_Operation'} : null,
            operation: isset($obj->{'Operation'}) ? (string) $obj->{'Operation'} : null,
            requiresRecord: isset($obj->{'RequiresRecord'}) ? (bool) $obj->{'RequiresRecord'} : null,
            isAnonymous: isset($obj->{'IsAnonymous'}) ? (bool) $obj->{'IsAnonymous'} : null,
        );
    }
}
