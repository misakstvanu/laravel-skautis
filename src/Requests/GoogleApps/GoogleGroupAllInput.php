<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class GoogleGroupAllInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idGoogleGroupMain = null,
        public readonly ?bool $includeChildUnits = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_GoogleGroupMain' => $this->idGoogleGroupMain,
            'IncludeChildUnits' => $this->includeChildUnits,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
