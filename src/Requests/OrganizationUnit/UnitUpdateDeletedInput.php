<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitUpdateDeletedInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $isDeleted = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'IsDeleted' => $this->isDeleted,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
