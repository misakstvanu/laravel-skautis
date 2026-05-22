<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitDetailInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $id = null,
        public readonly ?bool $findStredisko = null,
        public readonly ?bool $findUstredi = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'FindStredisko' => $this->findStredisko,
            'FindUstredi' => $this->findUstredi,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
