<?php

namespace Misakstvanu\LaravelSkautis\Requests\ApplicationManagement;

final class PackageApplicationInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPackage = null,
        public readonly ?string $package = null,
        public readonly ?string $idApplication = null,
        public readonly ?string $application = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Package' => $this->idPackage,
            'Package' => $this->package,
            'ID_Application' => $this->idApplication,
            'Application' => $this->application,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
