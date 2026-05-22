<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class RealtyDocumentUpdateBindingInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUser = null,
        public readonly ?string $location = null,
        public readonly ?string $origin = null,
        public readonly ?string $saved = null,
        public readonly ?bool $isPublic = null,
        public readonly ?string $downloadName = null,
        public readonly ?string $note = null,
        public readonly ?int $size = null,
        public readonly ?string $hash = null,
        public readonly ?int $idRealty = null,
        public readonly ?string $realty = null,
        public readonly ?int $idOccupation = null,
        public readonly ?string $extension = null,
        public readonly ?string $idTempFileDocument = null,
        public readonly ?int $idDocument = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_User' => $this->idUser,
            'Location' => $this->location,
            'Origin' => $this->origin,
            'Saved' => $this->saved,
            'IsPublic' => $this->isPublic,
            'DownloadName' => $this->downloadName,
            'Note' => $this->note,
            'Size' => $this->size,
            'Hash' => $this->hash,
            'ID_Realty' => $this->idRealty,
            'Realty' => $this->realty,
            'ID_Occupation' => $this->idOccupation,
            'Extension' => $this->extension,
            'ID_TempFileDocument' => $this->idTempFileDocument,
            'ID_Document' => $this->idDocument,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
