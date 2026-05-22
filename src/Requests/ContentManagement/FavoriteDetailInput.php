<?php

namespace Misakstvanu\LaravelSkautis\Requests\ContentManagement;

final class FavoriteDetailInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPage = null,
        public readonly ?int $idUser = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Page' => $this->idPage,
            'ID_User' => $this->idUser,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
