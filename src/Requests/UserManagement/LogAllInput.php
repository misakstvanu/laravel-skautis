<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class LogAllInput
{
    public function __construct(
        public readonly ?string $idTableDisplay = null,
        public readonly ?int $displayObjectId = null,
        public readonly ?int $idUser = null,
        public readonly ?string $idOperation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_TableDisplay' => $this->idTableDisplay,
            'DisplayObjectId' => $this->displayObjectId,
            'ID_User' => $this->idUser,
            'ID_Operation' => $this->idOperation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
