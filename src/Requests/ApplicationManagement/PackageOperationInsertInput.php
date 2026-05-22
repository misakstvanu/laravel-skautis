<?php

namespace Misakstvanu\LaravelSkautis\Requests\ApplicationManagement;

final class PackageOperationInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPackage = null,
        public readonly ?string $package = null,
        public readonly ?string $idOperation = null,
        public readonly ?string $operation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Package' => $this->idPackage,
            'Package' => $this->package,
            'ID_Operation' => $this->idOperation,
            'Operation' => $this->operation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
