<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class ActionAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $idTable = null,
        public readonly ?string $idTableRelated = null,
        public readonly ?string $idOperation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ID_Table' => $this->idTable,
            'ID_TableRelated' => $this->idTableRelated,
            'ID_Operation' => $this->idOperation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
