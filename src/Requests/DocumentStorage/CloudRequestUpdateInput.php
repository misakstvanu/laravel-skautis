<?php

namespace Misakstvanu\LaravelSkautis\Requests\DocumentStorage;

final class CloudRequestUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?int $idCloud = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_User' => $this->idUser,
            'ID_Cloud' => $this->idCloud,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
