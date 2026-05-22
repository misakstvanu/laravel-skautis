<?php

namespace Misakstvanu\LaravelSkautis\Requests\DocumentStorage;

final class DocumentDeleteDocumentInTableInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idDocumentClass = null,
        public readonly ?string $table = null,
        public readonly ?string $tableAction = null,
        public readonly ?string $column = null,
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
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
