<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonAllJournalRoverInput
{
    public function __construct(
        public readonly ?int $unit_ID = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Unit_ID' => $this->unit_ID,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
