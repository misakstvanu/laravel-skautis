<?php

namespace Misakstvanu\LaravelSkautis\Requests\ContentManagement;

final class MenuAllSubmenuHtmlInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $baseUrl = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'BaseUrl' => $this->baseUrl,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
