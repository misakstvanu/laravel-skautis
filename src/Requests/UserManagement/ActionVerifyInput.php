<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class ActionVerifyInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idTable = null,
        public readonly ?string $idAction = null,
        public readonly ?bool $isRaiseError = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Table' => $this->idTable,
            'ID_Action' => $this->idAction,
            'IsRaiseError' => $this->isRaiseError,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
