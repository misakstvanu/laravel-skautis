<?php

namespace Misakstvanu\LaravelSkautis\Responses\DocumentStorage;

final class DocumentUpdateDocumentInTableOutput
{
    public function __construct(
        public readonly ?int $idDocument = null,
        public readonly ?string $storagePath = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idDocument: isset($obj->{'ID_Document'}) ? (int) $obj->{'ID_Document'} : null,
            storagePath: isset($obj->{'StoragePath'}) ? (string) $obj->{'StoragePath'} : null,
        );
    }
}
