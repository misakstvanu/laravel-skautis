<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class LogDetailInput
{
    public function __construct(
        public readonly ?int $id = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
