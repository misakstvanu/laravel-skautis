<?php

namespace Misakstvanu\LaravelSkautis\Requests\ContentManagement;

final class PageStateItemDeleteInput
{
    public function __construct(
        public readonly ?int $idPage = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Page' => $this->idPage,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
