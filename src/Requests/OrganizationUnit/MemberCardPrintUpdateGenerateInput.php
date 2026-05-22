<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class MemberCardPrintUpdateGenerateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ValidFrom' => $this->validFrom,
            'ValidTo' => $this->validTo,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
