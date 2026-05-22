<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class TableRebuildInput
{
    public function __construct(
        public readonly ?bool $onlyFast = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'OnlyFast' => $this->onlyFast,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
