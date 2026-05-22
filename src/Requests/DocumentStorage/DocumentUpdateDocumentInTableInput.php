<?php

namespace Misakstvanu\LaravelSkautis\Requests\DocumentStorage;

final class DocumentUpdateDocumentInTableInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idDocumentClass = null,
        public readonly ?string $table = null,
        public readonly ?string $tableAction = null,
        public readonly ?string $column = null,
        public readonly ?string $idTempFile = null,
        public readonly ?bool $moveDocument = null,
        public readonly ?int $idRelatedTable = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_DocumentClass' => $this->idDocumentClass,
            'Table' => $this->table,
            'TableAction' => $this->tableAction,
            'Column' => $this->column,
            'ID_TempFile' => $this->idTempFile,
            'MoveDocument' => $this->moveDocument,
            'ID_RelatedTable' => $this->idRelatedTable,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
