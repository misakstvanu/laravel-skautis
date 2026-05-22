<?php

namespace Misakstvanu\LaravelSkautis\Requests\ApplicationManagement;

final class PackageApplicationAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPackage = null,
        public readonly ?string $idApplication = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Package' => $this->idPackage,
            'ID_Application' => $this->idApplication,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
