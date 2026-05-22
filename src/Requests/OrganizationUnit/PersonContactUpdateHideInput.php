<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonContactUpdateHideInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $isHidden = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'IsHidden' => $this->isHidden,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
