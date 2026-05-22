<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class QualificationAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idQualificationType = null,
        public readonly ?string $qualificationType = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?string $letterNumber = null,
        public readonly ?string $note = null,
        public readonly ?int $idDocument = null,
        public readonly ?bool $canLetter = null,
        public readonly ?bool $canUpload = null,
        public readonly ?bool $canDownload = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idQualificationType: isset($obj->{'ID_QualificationType'}) ? (int) $obj->{'ID_QualificationType'} : null,
            qualificationType: isset($obj->{'QualificationType'}) ? (string) $obj->{'QualificationType'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            letterNumber: isset($obj->{'LetterNumber'}) ? (string) $obj->{'LetterNumber'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            idDocument: isset($obj->{'ID_Document'}) ? (int) $obj->{'ID_Document'} : null,
            canLetter: isset($obj->{'CanLetter'}) ? (bool) $obj->{'CanLetter'} : null,
            canUpload: isset($obj->{'CanUpload'}) ? (bool) $obj->{'CanUpload'} : null,
            canDownload: isset($obj->{'CanDownload'}) ? (bool) $obj->{'CanDownload'} : null,
        );
    }
}
