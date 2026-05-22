<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OccupationAllRealtyCollectionInput
{
    public function __construct(
        public readonly ?int $idRealtyCollection = null,
        public readonly ?bool $isActive = null,
        public readonly ?bool $isBorrowable = null,
        public readonly ?string $idApplication = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_RealtyCollection' => $this->idRealtyCollection,
            'IsActive' => $this->isActive,
            'IsBorrowable' => $this->isBorrowable,
            'ID_Application' => $this->idApplication,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
