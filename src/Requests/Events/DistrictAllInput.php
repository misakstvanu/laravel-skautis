<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class DistrictAllInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idRegion = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_Region' => $this->idRegion,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
