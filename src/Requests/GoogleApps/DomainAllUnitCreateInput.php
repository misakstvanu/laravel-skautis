<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class DomainAllUnitCreateInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?bool $canGoogleAccount = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'CanGoogleAccount' => $this->canGoogleAccount,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
