<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OccupationPhotoInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idOccupation = null,
        public readonly ?int $idDocument = null,
        public readonly ?string $idTempFile = null,
        public readonly ?string $description = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Occupation' => $this->idOccupation,
            'ID_Document' => $this->idDocument,
            'ID_TempFile' => $this->idTempFile,
            'Description' => $this->description,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
