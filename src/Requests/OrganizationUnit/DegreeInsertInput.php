<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class DegreeInsertInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?int $id = null,
        public readonly ?int $idDegreeType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'ID' => $this->id,
            'ID_DegreeType' => $this->idDegreeType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
