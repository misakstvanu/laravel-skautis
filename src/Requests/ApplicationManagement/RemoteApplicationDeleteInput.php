<?php

namespace Misakstvanu\LaravelSkautis\Requests\ApplicationManagement;

final class RemoteApplicationDeleteInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
