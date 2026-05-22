<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class RealtyCollectionAdminInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idRealtyCollection = null,
        public readonly ?string $realtyCollection = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_RealtyCollection' => $this->idRealtyCollection,
            'RealtyCollection' => $this->realtyCollection,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
