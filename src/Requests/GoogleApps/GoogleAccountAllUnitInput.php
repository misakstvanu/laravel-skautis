<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class GoogleAccountAllUnitInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?int $id = null,
        public readonly ?bool $isMain = null,
        public readonly ?int $idGoogleAccountMain = null,
        public readonly ?bool $includeChildUnits = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'ID' => $this->id,
            'IsMain' => $this->isMain,
            'ID_GoogleAccountMain' => $this->idGoogleAccountMain,
            'IncludeChildUnits' => $this->includeChildUnits,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
