<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OccupationRentEquipmentAllInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idOccupation = null,
        public readonly ?int $id = null,
        public readonly ?int $idOccupationEquipment = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_Occupation' => $this->idOccupation,
            'ID' => $this->id,
            'ID_OccupationEquipment' => $this->idOccupationEquipment,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
