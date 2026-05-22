<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonRegistrationDeleteInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idItems = null,
        public readonly ?int $idUnitRegistration = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Items' => $this->idItems,
            'ID_UnitRegistration' => $this->idUnitRegistration,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
