<?php

namespace Misakstvanu\LaravelSkautis\Requests\DocumentStorage;

final class DocumentVersionInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $date = null,
        public readonly ?int $idDocument = null,
        public readonly ?int $idUser = null,
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
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'Date' => $this->date,
            'ID_Document' => $this->idDocument,
            'ID_User' => $this->idUser,
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
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
