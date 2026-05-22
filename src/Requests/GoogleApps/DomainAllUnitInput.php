<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class DomainAllUnitInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $idDomainState = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_Unit' => $this->idUnit,
            'ID_DomainState' => $this->idDomainState,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
