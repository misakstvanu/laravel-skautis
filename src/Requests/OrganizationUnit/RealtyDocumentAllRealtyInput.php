<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class RealtyDocumentAllRealtyInput
{
    public function __construct(
        public readonly ?int $idRealty = null,
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?string $location = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Realty' => $this->idRealty,
            'ID' => $this->id,
            'ID_User' => $this->idUser,
            'Location' => $this->location,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
