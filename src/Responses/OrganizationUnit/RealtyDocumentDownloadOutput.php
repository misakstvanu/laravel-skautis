<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class RealtyDocumentDownloadOutput
{
    public function __construct(
        public readonly ?string $fileName = null,
        public readonly ?string $extension = null,
        public readonly ?string $storage = null,
        public readonly ?string $fileContent = null,
        public readonly ?int $idDocument = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            fileName: isset($obj->{'FileName'}) ? (string) $obj->{'FileName'} : null,
            extension: isset($obj->{'Extension'}) ? (string) $obj->{'Extension'} : null,
            storage: isset($obj->{'Storage'}) ? (string) $obj->{'Storage'} : null,
            fileContent: isset($obj->{'FileContent'}) ? (string) $obj->{'FileContent'} : null,
            idDocument: isset($obj->{'ID_Document'}) ? (int) $obj->{'ID_Document'} : null,
        );
    }
}
