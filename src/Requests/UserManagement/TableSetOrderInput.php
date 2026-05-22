<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class TableSetOrderInput
{
    public function __construct(
        public readonly ?string $idTable = null,
        public readonly ?string $idParentTable = null,
        public readonly ?int $id = null,
        public readonly ?int $orderInc = null,
        public readonly ?string $key = null,
        public readonly ?string $type = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Table' => $this->idTable,
            'ID_ParentTable' => $this->idParentTable,
            'ID' => $this->id,
            'OrderInc' => $this->orderInc,
            'Key' => $this->key,
            'Type' => $this->type,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
