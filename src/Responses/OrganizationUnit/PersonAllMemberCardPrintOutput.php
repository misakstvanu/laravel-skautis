<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonAllMemberCardPrintOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $storageMediumPhoto = null,
        public readonly ?int $idDocumentMediumPhoto = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            storageMediumPhoto: isset($obj->{'StorageMediumPhoto'}) ? (string) $obj->{'StorageMediumPhoto'} : null,
            idDocumentMediumPhoto: isset($obj->{'ID_DocumentMediumPhoto'}) ? (int) $obj->{'ID_DocumentMediumPhoto'} : null,
        );
    }
}
