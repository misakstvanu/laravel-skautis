<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class PersistentIPDetailIsPersitentInput
{
    public function __construct(
        public readonly ?string $iP = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'IP' => $this->iP,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
