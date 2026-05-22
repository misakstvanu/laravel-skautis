<?php

namespace Misakstvanu\LaravelSkautis\Requests\ContentManagement;

final class FavoriteUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?int $idPage = null,
        public readonly ?string $page = null,
        public readonly ?string $dateCreate = null,
        public readonly ?string $displayName = null,
        public readonly ?string $urlParameter = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_User' => $this->idUser,
            'ID_Page' => $this->idPage,
            'Page' => $this->page,
            'DateCreate' => $this->dateCreate,
            'DisplayName' => $this->displayName,
            'UrlParameter' => $this->urlParameter,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
