<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonChangeUpdateStateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idPersonChangeState = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_PersonChangeState' => $this->idPersonChangeState,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
