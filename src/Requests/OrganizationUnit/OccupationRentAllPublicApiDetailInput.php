<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OccupationRentAllPublicApiDetailInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $int = null,
        public readonly ?string $string = null,
        public readonly ?int $idRealtyType = null,
        public readonly ?int $capacity = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'int' => $this->int,
            'string' => $this->string,
            'ID_RealtyType' => $this->idRealtyType,
            'Capacity' => $this->capacity,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
