<?php

namespace Misakstvanu\LaravelSkautis\Responses\DocumentStorage;

final class DocumentAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idDocumentVersion = null,
        public readonly ?string $documentVersion = null,
        public readonly ?string $idDocumentClass = null,
        public readonly ?string $documentClass = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idDocumentVersion: isset($obj->{'ID_DocumentVersion'}) ? (int) $obj->{'ID_DocumentVersion'} : null,
            documentVersion: isset($obj->{'DocumentVersion'}) ? (string) $obj->{'DocumentVersion'} : null,
            idDocumentClass: isset($obj->{'ID_DocumentClass'}) ? (string) $obj->{'ID_DocumentClass'} : null,
            documentClass: isset($obj->{'DocumentClass'}) ? (string) $obj->{'DocumentClass'} : null,
        );
    }
}
