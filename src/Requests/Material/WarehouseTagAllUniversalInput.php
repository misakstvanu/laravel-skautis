<?php

namespace Misakstvanu\LaravelSkautis\Requests\Material;

final class WarehouseTagAllUniversalInput
{
    public function __construct(
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idEventGeneral = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventEducation' => $this->idEventEducation,
            'ID_EventGeneral' => $this->idEventGeneral,
            'ID_Unit' => $this->idUnit,
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
