<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class GoogleAccountUpdateOrganizationUnitInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $organizationUnitId = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'OrganizationUnitId' => $this->organizationUnitId,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
