<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventEducationOtherIllustrativePhotoAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventEducationOther = null,
        public readonly ?int $idDocument = null,
        public readonly ?int $idDocumentSmall = null,
        public readonly ?string $displayName = null,
        public readonly ?string $fileName = null,
        public readonly ?string $fileNameExtension = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventEducationOther: isset($obj->{'ID_EventEducationOther'}) ? (int) $obj->{'ID_EventEducationOther'} : null,
            idDocument: isset($obj->{'ID_Document'}) ? (int) $obj->{'ID_Document'} : null,
            idDocumentSmall: isset($obj->{'ID_DocumentSmall'}) ? (int) $obj->{'ID_DocumentSmall'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            fileName: isset($obj->{'FileName'}) ? (string) $obj->{'FileName'} : null,
            fileNameExtension: isset($obj->{'FileNameExtension'}) ? (string) $obj->{'FileNameExtension'} : null,
        );
    }
}
