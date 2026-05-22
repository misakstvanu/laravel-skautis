<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class QualificationDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $id = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?int $idQualificationType = null,
        public readonly ?string $qualificationType = null,
        public readonly ?string $letterNumber = null,
        public readonly ?string $note = null,
        public readonly ?bool $isUsed = null,
        public readonly ?bool $sendMessage = null,
        public readonly ?int $idDocument = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            idQualificationType: isset($obj->{'ID_QualificationType'}) ? (int) $obj->{'ID_QualificationType'} : null,
            qualificationType: isset($obj->{'QualificationType'}) ? (string) $obj->{'QualificationType'} : null,
            letterNumber: isset($obj->{'LetterNumber'}) ? (string) $obj->{'LetterNumber'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            isUsed: isset($obj->{'IsUsed'}) ? (bool) $obj->{'IsUsed'} : null,
            sendMessage: isset($obj->{'SendMessage'}) ? (bool) $obj->{'SendMessage'} : null,
            idDocument: isset($obj->{'ID_Document'}) ? (int) $obj->{'ID_Document'} : null,
        );
    }
}
