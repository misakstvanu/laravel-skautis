<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class UserUpdateFavoriteLimitInput
{
    public function __construct(
        public readonly ?int $favoriteLimit = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'FavoriteLimit' => $this->favoriteLimit,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
