<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class QualificationMistakeInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idQualification = null,
        public readonly ?int $idPersonCreated = null,
        public readonly ?string $personCreated = null,
        public readonly ?int $dateCreated = null,
        public readonly ?string $description = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Qualification' => $this->idQualification,
            'ID_PersonCreated' => $this->idPersonCreated,
            'PersonCreated' => $this->personCreated,
            'DateCreated' => $this->dateCreated,
            'Description' => $this->description,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
