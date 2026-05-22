<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class EducationAllInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?int $idEducationType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'ID_EducationType' => $this->idEducationType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
