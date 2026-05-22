<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitCancelAllInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $idUnitCancelType = null,
        public readonly ?bool $isValid = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_Unit' => $this->idUnit,
            'ID_Person' => $this->idPerson,
            'ID_UnitCancelType' => $this->idUnitCancelType,
            'IsValid' => $this->isValid,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
