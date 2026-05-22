<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitAllAccountingInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $id = null,
        public readonly ?string $lastUpdate = null,
        public readonly ?int $skip = null,
        public readonly ?int $limit = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'LastUpdate' => $this->lastUpdate,
            'Skip' => $this->skip,
            'Limit' => $this->limit,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
