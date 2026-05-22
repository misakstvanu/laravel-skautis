<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonAllGoogleGroupInput
{
    public function __construct(
        public readonly ?int $idGoogleGroup = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_GoogleGroup' => $this->idGoogleGroup,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
