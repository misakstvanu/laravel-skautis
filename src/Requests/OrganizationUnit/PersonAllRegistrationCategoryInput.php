<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonAllRegistrationCategoryInput
{
    public function __construct(
        public readonly ?int $idRegistrationCategory = null,
        public readonly ?int $id = null,
        public readonly ?bool $includeChild = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_RegistrationCategory' => $this->idRegistrationCategory,
            'ID' => $this->id,
            'IncludeChild' => $this->includeChild,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
