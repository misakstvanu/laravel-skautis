<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonPhotoInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $size = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Size' => $this->size,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
