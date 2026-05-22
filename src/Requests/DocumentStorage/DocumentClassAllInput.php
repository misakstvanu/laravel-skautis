<?php

namespace Misakstvanu\LaravelSkautis\Requests\DocumentStorage;

final class DocumentClassAllInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idTable = null,
        public readonly ?string $idActionDetail = null,
        public readonly ?string $idActionEdit = null,
        public readonly ?string $idActionDel = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_Table' => $this->idTable,
            'ID_ActionDetail' => $this->idActionDetail,
            'ID_ActionEdit' => $this->idActionEdit,
            'ID_ActionDel' => $this->idActionDel,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
