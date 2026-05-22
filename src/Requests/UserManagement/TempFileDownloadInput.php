<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class TempFileDownloadInput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $idApplication = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Application' => $this->idApplication,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
