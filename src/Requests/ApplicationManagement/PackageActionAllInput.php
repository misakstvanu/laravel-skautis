<?php

namespace Misakstvanu\LaravelSkautis\Requests\ApplicationManagement;

final class PackageActionAllInput
{
    public function __construct(
        public readonly ?int $idPackage = null,
        public readonly ?int $id = null,
        public readonly ?string $idAction = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Package' => $this->idPackage,
            'ID' => $this->id,
            'ID_Action' => $this->idAction,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
