<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class RegistryAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $idRegistryObject = null,
        public readonly ?string $idRegistryType = null,
        public readonly ?string $idRegistryState = null,
        public readonly ?string $dateCreateFrom = null,
        public readonly ?string $dateCreateTo = null,
        public readonly ?int $dateCreateMonth = null,
        public readonly ?int $dateCreateYear = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ID_Unit' => $this->idUnit,
            'ID_RegistryObject' => $this->idRegistryObject,
            'ID_RegistryType' => $this->idRegistryType,
            'ID_RegistryState' => $this->idRegistryState,
            'DateCreateFrom' => $this->dateCreateFrom,
            'DateCreateTo' => $this->dateCreateTo,
            'DateCreateMonth' => $this->dateCreateMonth,
            'DateCreateYear' => $this->dateCreateYear,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
