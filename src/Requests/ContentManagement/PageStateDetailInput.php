<?php

namespace Misakstvanu\LaravelSkautis\Requests\ContentManagement;

final class PageStateDetailInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPage = null,
        public readonly ?string $urlParameter = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Page' => $this->idPage,
            'UrlParameter' => $this->urlParameter,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
