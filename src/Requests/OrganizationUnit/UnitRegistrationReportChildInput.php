<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitRegistrationReportChildInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $unitType = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?bool $showChildUnit = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'UnitType' => $this->unitType,
            'RegistrationNumber' => $this->registrationNumber,
            'ShowChildUnit' => $this->showChildUnit,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
