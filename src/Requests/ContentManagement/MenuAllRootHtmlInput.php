<?php

namespace Misakstvanu\LaravelSkautis\Requests\ContentManagement;

final class MenuAllRootHtmlInput
{
    public function __construct(
        public readonly ?string $baseUrl = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'BaseUrl' => $this->baseUrl,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
