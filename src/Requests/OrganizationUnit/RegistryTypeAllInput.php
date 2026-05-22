<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class RegistryTypeAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $idRegistryObject = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ID_RegistryObject' => $this->idRegistryObject,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
