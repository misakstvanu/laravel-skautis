<?php

namespace Misakstvanu\LaravelSkautis\Requests\DocumentStorage;

final class DocumentInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idDocumentVersion = null,
        public readonly ?string $documentVersion = null,
        public readonly ?string $idDocumentClass = null,
        public readonly ?string $documentClass = null,
        public readonly ?string $displayName = null,
        public readonly ?string $created = null,
        public readonly ?string $date = null,
        public readonly ?int $idDocument = null,
        public readonly ?int $idUser = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $size = null,
        public readonly ?string $fileName = null,
        public readonly ?string $contentType = null,
        public readonly ?string $extension = null,
        public readonly ?string $hash = null,
        public readonly ?int $version = null,
        public readonly ?string $storage = null,
        public readonly ?string $fileNameExtension = null,
        public readonly ?int $imageWidth = null,
        public readonly ?int $imageHeight = null,
        public readonly ?bool $useCurrentVersion = null,
        public readonly ?int $idCloud = null,
        public readonly ?string $idCloudState = null,
        public readonly ?string $cloudGuid = null,
        public readonly ?string $cloudValidTo = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_DocumentVersion' => $this->idDocumentVersion,
            'DocumentVersion' => $this->documentVersion,
            'ID_DocumentClass' => $this->idDocumentClass,
            'DocumentClass' => $this->documentClass,
            'DisplayName' => $this->displayName,
            'Created' => $this->created,
            'Date' => $this->date,
            'ID_Document' => $this->idDocument,
            'ID_User' => $this->idUser,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'Size' => $this->size,
            'FileName' => $this->fileName,
            'ContentType' => $this->contentType,
            'Extension' => $this->extension,
            'Hash' => $this->hash,
            'Version' => $this->version,
            'Storage' => $this->storage,
            'FileNameExtension' => $this->fileNameExtension,
            'ImageWidth' => $this->imageWidth,
            'ImageHeight' => $this->imageHeight,
            'UseCurrentVersion' => $this->useCurrentVersion,
            'ID_Cloud' => $this->idCloud,
            'ID_CloudState' => $this->idCloudState,
            'CloudGuid' => $this->cloudGuid,
            'CloudValidTo' => $this->cloudValidTo,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
