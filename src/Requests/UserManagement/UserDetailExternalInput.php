<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class UserDetailExternalInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
