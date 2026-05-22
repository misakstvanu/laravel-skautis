<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class QualificationRequestAllPersonOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPersonCreated = null,
        public readonly ?string $personCreated = null,
        public readonly ?int $idQualificationType = null,
        public readonly ?string $qualificationType = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?string $letterNumber = null,
        public readonly ?string $dateCreate = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPersonCreated: isset($obj->{'ID_PersonCreated'}) ? (int) $obj->{'ID_PersonCreated'} : null,
            personCreated: isset($obj->{'PersonCreated'}) ? (string) $obj->{'PersonCreated'} : null,
            idQualificationType: isset($obj->{'ID_QualificationType'}) ? (int) $obj->{'ID_QualificationType'} : null,
            qualificationType: isset($obj->{'QualificationType'}) ? (string) $obj->{'QualificationType'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            letterNumber: isset($obj->{'LetterNumber'}) ? (string) $obj->{'LetterNumber'} : null,
            dateCreate: isset($obj->{'DateCreate'}) ? (string) $obj->{'DateCreate'} : null,
        );
    }
}
