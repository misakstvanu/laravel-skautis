<?php

namespace Misakstvanu\LaravelSkautis\Responses\DocumentStorage;

final class DocumentVersionAllOutput
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

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            date: isset($obj->{'Date'}) ? (string) $obj->{'Date'} : null,
            idDocument: isset($obj->{'ID_Document'}) ? (int) $obj->{'ID_Document'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            size: isset($obj->{'Size'}) ? (int) $obj->{'Size'} : null,
            fileName: isset($obj->{'FileName'}) ? (string) $obj->{'FileName'} : null,
            contentType: isset($obj->{'ContentType'}) ? (string) $obj->{'ContentType'} : null,
            extension: isset($obj->{'Extension'}) ? (string) $obj->{'Extension'} : null,
            hash: isset($obj->{'Hash'}) ? (string) $obj->{'Hash'} : null,
            version: isset($obj->{'Version'}) ? (int) $obj->{'Version'} : null,
            storage: isset($obj->{'Storage'}) ? (string) $obj->{'Storage'} : null,
            fileNameExtension: isset($obj->{'FileNameExtension'}) ? (string) $obj->{'FileNameExtension'} : null,
            imageWidth: isset($obj->{'ImageWidth'}) ? (int) $obj->{'ImageWidth'} : null,
            imageHeight: isset($obj->{'ImageHeight'}) ? (int) $obj->{'ImageHeight'} : null,
        );
    }
}
