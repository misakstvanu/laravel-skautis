<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonUpdatePersonTypeInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idPersonType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_PersonType' => $this->idPersonType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
