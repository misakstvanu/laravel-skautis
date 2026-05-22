<?php

namespace Misakstvanu\LaravelSkautis\Requests\ContentManagement;

final class FavoriteAllInput
{
    public function __construct(
        public readonly ?int $idUser = null,
        public readonly ?int $id = null,
        public readonly ?int $idPage = null,
        public readonly ?string $displayName = null,
        public readonly ?int $top = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_User' => $this->idUser,
            'ID' => $this->id,
            'ID_Page' => $this->idPage,
            'DisplayName' => $this->displayName,
            'Top' => $this->top,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
