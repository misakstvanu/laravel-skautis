<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class PersonSchoolDetailPersonOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $displayName = null,
        public readonly ?string $city = null,
        public readonly ?string $extension = null,
        public readonly ?string $scan = null,
        public readonly ?string $dateCreate = null,
        public readonly ?string $photoExtension = null,
        public readonly ?string $photo = null,
        public readonly ?string $idTempFile = null,
        public readonly ?string $idPersonSchoolTempFile = null,
        public readonly ?int $idDocumentPhoto = null,
        public readonly ?int $idDocumentScan = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            extension: isset($obj->{'Extension'}) ? (string) $obj->{'Extension'} : null,
            scan: isset($obj->{'Scan'}) ? (string) $obj->{'Scan'} : null,
            dateCreate: isset($obj->{'DateCreate'}) ? (string) $obj->{'DateCreate'} : null,
            photoExtension: isset($obj->{'PhotoExtension'}) ? (string) $obj->{'PhotoExtension'} : null,
            photo: isset($obj->{'Photo'}) ? (string) $obj->{'Photo'} : null,
            idTempFile: isset($obj->{'ID_TempFile'}) ? (string) $obj->{'ID_TempFile'} : null,
            idPersonSchoolTempFile: isset($obj->{'ID_PersonSchoolTempFile'}) ? (string) $obj->{'ID_PersonSchoolTempFile'} : null,
            idDocumentPhoto: isset($obj->{'ID_DocumentPhoto'}) ? (int) $obj->{'ID_DocumentPhoto'} : null,
            idDocumentScan: isset($obj->{'ID_DocumentScan'}) ? (int) $obj->{'ID_DocumentScan'} : null,
        );
    }
}
