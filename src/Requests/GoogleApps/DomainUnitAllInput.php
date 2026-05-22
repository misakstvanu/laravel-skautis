<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class DomainUnitAllInput
{
    public function __construct(
        public readonly ?int $idDomain = null,
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Domain' => $this->idDomain,
            'ID' => $this->id,
            'ID_Unit' => $this->idUnit,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
