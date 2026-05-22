<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OccupationRentUpdateRegenerateCalendarInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $id = null,
        public readonly ?bool $reset = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'Reset' => $this->reset,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
