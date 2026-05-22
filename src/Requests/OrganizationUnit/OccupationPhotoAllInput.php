<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OccupationPhotoAllInput
{
    public function __construct(
        public readonly ?int $idOccupation = null,
        public readonly ?int $id = null,
        public readonly ?int $idDocument = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Occupation' => $this->idOccupation,
            'ID' => $this->id,
            'ID_Document' => $this->idDocument,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
