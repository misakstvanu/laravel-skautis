<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OccupationRentAllCalendarAllInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?bool $isInstant = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'IsInstant' => $this->isInstant,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
