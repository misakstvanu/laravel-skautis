<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class RealtyDocumentDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
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

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            location: isset($obj->{'Location'}) ? (string) $obj->{'Location'} : null,
            origin: isset($obj->{'Origin'}) ? (string) $obj->{'Origin'} : null,
            saved: isset($obj->{'Saved'}) ? (string) $obj->{'Saved'} : null,
            isPublic: isset($obj->{'IsPublic'}) ? (bool) $obj->{'IsPublic'} : null,
            downloadName: isset($obj->{'DownloadName'}) ? (string) $obj->{'DownloadName'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            size: isset($obj->{'Size'}) ? (int) $obj->{'Size'} : null,
            hash: isset($obj->{'Hash'}) ? (string) $obj->{'Hash'} : null,
            idRealty: isset($obj->{'ID_Realty'}) ? (int) $obj->{'ID_Realty'} : null,
            realty: isset($obj->{'Realty'}) ? (string) $obj->{'Realty'} : null,
            idOccupation: isset($obj->{'ID_Occupation'}) ? (int) $obj->{'ID_Occupation'} : null,
            extension: isset($obj->{'Extension'}) ? (string) $obj->{'Extension'} : null,
            idTempFileDocument: isset($obj->{'ID_TempFileDocument'}) ? (string) $obj->{'ID_TempFileDocument'} : null,
            idDocument: isset($obj->{'ID_Document'}) ? (int) $obj->{'ID_Document'} : null,
        );
    }
}
