<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class TableMaintranceInput
{
    public function __construct(
        public readonly ?string $databases = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Databases' => $this->databases,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
