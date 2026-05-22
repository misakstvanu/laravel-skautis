<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class EducationInsertInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?int $id = null,
        public readonly ?int $idEducationType = null,
        public readonly ?string $note = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'ID' => $this->id,
            'ID_EducationType' => $this->idEducationType,
            'Note' => $this->note,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
