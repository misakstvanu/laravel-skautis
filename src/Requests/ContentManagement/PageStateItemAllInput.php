<?php

namespace Misakstvanu\LaravelSkautis\Requests\ContentManagement;

final class PageStateItemAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPageState = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_PageState' => $this->idPageState,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
