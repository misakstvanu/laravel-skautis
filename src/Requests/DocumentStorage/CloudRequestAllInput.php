<?php

namespace Misakstvanu\LaravelSkautis\Requests\DocumentStorage;

final class CloudRequestAllInput
{
    public function __construct(
        public readonly ?int $idCloud = null,
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Cloud' => $this->idCloud,
            'ID' => $this->id,
            'ID_User' => $this->idUser,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
