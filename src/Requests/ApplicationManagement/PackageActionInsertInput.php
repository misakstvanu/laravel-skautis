<?php

namespace Misakstvanu\LaravelSkautis\Requests\ApplicationManagement;

final class PackageActionInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPackage = null,
        public readonly ?string $package = null,
        public readonly ?string $idAction = null,
        public readonly ?string $action = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Package' => $this->idPackage,
            'Package' => $this->package,
            'ID_Action' => $this->idAction,
            'Action' => $this->action,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
