<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonOtherDetailUnitEnrollInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $loadUnitEnroll = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'LoadUnitEnroll' => $this->loadUnitEnroll,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
