<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class MemberCardPrintActivateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $validFrom = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ValidFrom' => $this->validFrom,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
