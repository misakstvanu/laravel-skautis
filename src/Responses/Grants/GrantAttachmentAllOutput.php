<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantAttachmentAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGrant = null,
        public readonly ?int $idUser = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $iconPath = null,
        public readonly ?string $person = null,
        public readonly ?string $date = null,
        public readonly ?string $description = null,
        public readonly ?string $note = null,
        public readonly ?int $size = null,
        public readonly ?string $fileName = null,
        public readonly ?string $idFileType = null,
        public readonly ?string $fileType = null,
        public readonly ?string $extension = null,
        public readonly ?string $hash = null,
        public readonly ?string $fileNameExtension = null,
        public readonly ?string $idAttachmentType = null,
        public readonly ?string $attachmentType = null,
        public readonly ?int $idGrantAttachment = null,
        public readonly ?int $idDocument = null,
        public readonly ?int $depositYear = null,
        public readonly ?bool $isDeposited = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isReal = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGrant: isset($obj->{'ID_Grant'}) ? (int) $obj->{'ID_Grant'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            iconPath: isset($obj->{'IconPath'}) ? (string) $obj->{'IconPath'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            date: isset($obj->{'Date'}) ? (string) $obj->{'Date'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            size: isset($obj->{'Size'}) ? (int) $obj->{'Size'} : null,
            fileName: isset($obj->{'FileName'}) ? (string) $obj->{'FileName'} : null,
            idFileType: isset($obj->{'ID_FileType'}) ? (string) $obj->{'ID_FileType'} : null,
            fileType: isset($obj->{'FileType'}) ? (string) $obj->{'FileType'} : null,
            extension: isset($obj->{'Extension'}) ? (string) $obj->{'Extension'} : null,
            hash: isset($obj->{'Hash'}) ? (string) $obj->{'Hash'} : null,
            fileNameExtension: isset($obj->{'FileNameExtension'}) ? (string) $obj->{'FileNameExtension'} : null,
            idAttachmentType: isset($obj->{'ID_AttachmentType'}) ? (string) $obj->{'ID_AttachmentType'} : null,
            attachmentType: isset($obj->{'AttachmentType'}) ? (string) $obj->{'AttachmentType'} : null,
            idGrantAttachment: isset($obj->{'ID_GrantAttachment'}) ? (int) $obj->{'ID_GrantAttachment'} : null,
            idDocument: isset($obj->{'ID_Document'}) ? (int) $obj->{'ID_Document'} : null,
            depositYear: isset($obj->{'DepositYear'}) ? (int) $obj->{'DepositYear'} : null,
            isDeposited: isset($obj->{'IsDeposited'}) ? (bool) $obj->{'IsDeposited'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            isReal: isset($obj->{'IsReal'}) ? (bool) $obj->{'IsReal'} : null,
        );
    }
}
