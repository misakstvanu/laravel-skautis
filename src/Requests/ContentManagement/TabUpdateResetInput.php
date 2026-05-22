<?php

namespace Misakstvanu\LaravelSkautis\Requests\ContentManagement;

final class TabUpdateResetInput
{
    public function __construct(
        public readonly ?string $masterPage = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'MasterPage' => $this->masterPage,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
