<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OccupationDetailRealtyDownloadInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idRealty = null,
        public readonly ?bool $publish = null,
        public readonly ?string $note = null,
        public readonly ?int $idRealtyType = null,
        public readonly ?string $realtyType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Unit' => $this->idUnit,
            'ID_Realty' => $this->idRealty,
            'Publish' => $this->publish,
            'Note' => $this->note,
            'ID_RealtyType' => $this->idRealtyType,
            'RealtyType' => $this->realtyType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
