<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class TempFileInsertDocumentInput
{
    public function __construct(
        public readonly ?int $size = null,
        public readonly ?string $contentType = null,
        public readonly ?string $extension = null,
        public readonly ?string $hashMD5 = null,
        public readonly ?int $imageWidth = null,
        public readonly ?int $imageHeigth = null,
        public readonly ?string $content = null,
        public readonly ?string $idApplication = null,
        public readonly ?string $displayName = null,
        public readonly ?string $filename = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Size' => $this->size,
            'ContentType' => $this->contentType,
            'Extension' => $this->extension,
            'HashMD5' => $this->hashMD5,
            'ImageWidth' => $this->imageWidth,
            'ImageHeigth' => $this->imageHeigth,
            'Content' => $this->content,
            'ID_Application' => $this->idApplication,
            'DisplayName' => $this->displayName,
            'Filename' => $this->filename,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
