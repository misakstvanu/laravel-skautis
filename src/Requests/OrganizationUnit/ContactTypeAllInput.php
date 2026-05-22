<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class ContactTypeAllInput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isForPerson = null,
        public readonly ?bool $isForUnit = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'IsForPerson' => $this->isForPerson,
            'IsForUnit' => $this->isForUnit,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
