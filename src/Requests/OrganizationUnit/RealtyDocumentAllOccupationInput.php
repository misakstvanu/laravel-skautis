<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class RealtyDocumentAllOccupationInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?string $location = null,
        public readonly ?int $idOccupation = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_User' => $this->idUser,
            'Location' => $this->location,
            'ID_Occupation' => $this->idOccupation,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
