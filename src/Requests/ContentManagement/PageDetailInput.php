<?php

namespace Misakstvanu\LaravelSkautis\Requests\ContentManagement;

final class PageDetailInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $url = null,
        public readonly ?bool $checkPermissions = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Url' => $this->url,
            'CheckPermissions' => $this->checkPermissions,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
