<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class EducatationSeminaryUpdateInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $yearFrom = null,
        public readonly ?string $note = null,
        public readonly ?string $participationType = null,
        public readonly ?int $idEventEducationType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'YearFrom' => $this->yearFrom,
            'Note' => $this->note,
            'ParticipationType' => $this->participationType,
            'ID_EventEducationType' => $this->idEventEducationType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
