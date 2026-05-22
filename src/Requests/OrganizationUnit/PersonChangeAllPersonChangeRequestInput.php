<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonChangeAllPersonChangeRequestInput
{
    public function __construct(
        public readonly ?int $idPersonChangeRequest = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_PersonChangeRequest' => $this->idPersonChangeRequest,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
