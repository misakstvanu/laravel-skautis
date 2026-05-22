<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class DomainUnitInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idDomain = null,
        public readonly ?string $domain = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?bool $includeChildUnit = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Domain' => $this->idDomain,
            'Domain' => $this->domain,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'RegistrationNumber' => $this->registrationNumber,
            'IncludeChildUnit' => $this->includeChildUnit,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
