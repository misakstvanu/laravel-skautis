<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class GroupTypeAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $idTable = null,
        public readonly ?bool $canLogin = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ID_Table' => $this->idTable,
            'CanLogin' => $this->canLogin,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
