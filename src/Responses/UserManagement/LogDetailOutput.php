<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class LogDetailOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $date = null,
        public readonly ?string $idTableDisplay = null,
        public readonly ?string $tableDisplay = null,
        public readonly ?int $displayObjectId = null,
        public readonly ?string $idTable = null,
        public readonly ?string $table = null,
        public readonly ?string $idOperation = null,
        public readonly ?string $operation = null,
        public readonly ?int $objectID = null,
        public readonly ?int $historyObjectId = null,
        public readonly ?bool $isAutomatic = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            date: isset($obj->{'Date'}) ? (string) $obj->{'Date'} : null,
            idTableDisplay: isset($obj->{'ID_TableDisplay'}) ? (string) $obj->{'ID_TableDisplay'} : null,
            tableDisplay: isset($obj->{'TableDisplay'}) ? (string) $obj->{'TableDisplay'} : null,
            displayObjectId: isset($obj->{'DisplayObjectId'}) ? (int) $obj->{'DisplayObjectId'} : null,
            idTable: isset($obj->{'ID_Table'}) ? (string) $obj->{'ID_Table'} : null,
            table: isset($obj->{'Table'}) ? (string) $obj->{'Table'} : null,
            idOperation: isset($obj->{'ID_Operation'}) ? (string) $obj->{'ID_Operation'} : null,
            operation: isset($obj->{'Operation'}) ? (string) $obj->{'Operation'} : null,
            objectID: isset($obj->{'ObjectID'}) ? (int) $obj->{'ObjectID'} : null,
            historyObjectId: isset($obj->{'HistoryObjectId'}) ? (int) $obj->{'HistoryObjectId'} : null,
            isAutomatic: isset($obj->{'IsAutomatic'}) ? (bool) $obj->{'IsAutomatic'} : null,
        );
    }
}
