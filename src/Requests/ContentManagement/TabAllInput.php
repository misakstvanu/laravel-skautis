<?php

namespace Misakstvanu\LaravelSkautis\Requests\ContentManagement;

final class TabAllInput
{
    public function __construct(
        public readonly ?string $masterPage = null,
        public readonly ?int $id = null,
        public readonly ?bool $isOrderSet = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'MasterPage' => $this->masterPage,
            'ID' => $this->id,
            'IsOrderSet' => $this->isOrderSet,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
