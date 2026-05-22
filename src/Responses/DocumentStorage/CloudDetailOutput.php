<?php

namespace Misakstvanu\LaravelSkautis\Responses\DocumentStorage;

final class CloudDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?string $idApplication = null,
        public readonly ?int $id = null,
        public readonly ?int $idDocumentVersion = null,
        public readonly ?string $documentVersion = null,
        public readonly ?string $idCloudState = null,
        public readonly ?string $cloudState = null,
        public readonly ?string $cloudGuid = null,
        public readonly ?string $validTo = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            idApplication: isset($obj->{'ID_Application'}) ? (string) $obj->{'ID_Application'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idDocumentVersion: isset($obj->{'ID_DocumentVersion'}) ? (int) $obj->{'ID_DocumentVersion'} : null,
            documentVersion: isset($obj->{'DocumentVersion'}) ? (string) $obj->{'DocumentVersion'} : null,
            idCloudState: isset($obj->{'ID_CloudState'}) ? (string) $obj->{'ID_CloudState'} : null,
            cloudState: isset($obj->{'CloudState'}) ? (string) $obj->{'CloudState'} : null,
            cloudGuid: isset($obj->{'CloudGuid'}) ? (string) $obj->{'CloudGuid'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
        );
    }
}
