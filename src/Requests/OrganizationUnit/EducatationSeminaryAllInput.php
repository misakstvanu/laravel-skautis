<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class EducatationSeminaryAllInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
