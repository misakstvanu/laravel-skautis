<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitLocationsInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $searchQuery = null,
        public readonly ?int $top = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'SearchQuery' => $this->searchQuery,
            'Top' => $this->top,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
