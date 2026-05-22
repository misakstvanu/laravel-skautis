<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class OccupationRentDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idOccupation = null,
        public readonly ?bool $isActive = null,
        public readonly ?string $displayName = null,
        public readonly ?string $email = null,
        public readonly ?string $phone = null,
        public readonly ?string $web = null,
        public readonly ?string $photoExtension = null,
        public readonly ?string $idTempFilePhotoExtension = null,
        public readonly ?string $fotogallery = null,
        public readonly ?string $contactNote = null,
        public readonly ?string $requirementExtension = null,
        public readonly ?string $idTempFileRequirementExtension = null,
        public readonly ?string $requirements = null,
        public readonly ?int $capacity = null,
        public readonly ?string $capacityNote = null,
        public readonly ?string $accommodationNote = null,
        public readonly ?bool $borrowableForeign = null,
        public readonly ?bool $isBookable = null,
        public readonly ?string $lastUpdate = null,
        public readonly ?string $person = null,
        public readonly ?int $int = null,
        public readonly ?string $string = null,
        public readonly ?int $idDocumentRequirement = null,
        public readonly ?int $idDocumentPhoto = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idOccupation: isset($obj->{'ID_Occupation'}) ? (int) $obj->{'ID_Occupation'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            phone: isset($obj->{'Phone'}) ? (string) $obj->{'Phone'} : null,
            web: isset($obj->{'Web'}) ? (string) $obj->{'Web'} : null,
            photoExtension: isset($obj->{'PhotoExtension'}) ? (string) $obj->{'PhotoExtension'} : null,
            idTempFilePhotoExtension: isset($obj->{'ID_TempFilePhotoExtension'}) ? (string) $obj->{'ID_TempFilePhotoExtension'} : null,
            fotogallery: isset($obj->{'Fotogallery'}) ? (string) $obj->{'Fotogallery'} : null,
            contactNote: isset($obj->{'ContactNote'}) ? (string) $obj->{'ContactNote'} : null,
            requirementExtension: isset($obj->{'RequirementExtension'}) ? (string) $obj->{'RequirementExtension'} : null,
            idTempFileRequirementExtension: isset($obj->{'ID_TempFileRequirementExtension'}) ? (string) $obj->{'ID_TempFileRequirementExtension'} : null,
            requirements: isset($obj->{'Requirements'}) ? (string) $obj->{'Requirements'} : null,
            capacity: isset($obj->{'Capacity'}) ? (int) $obj->{'Capacity'} : null,
            capacityNote: isset($obj->{'CapacityNote'}) ? (string) $obj->{'CapacityNote'} : null,
            accommodationNote: isset($obj->{'AccommodationNote'}) ? (string) $obj->{'AccommodationNote'} : null,
            borrowableForeign: isset($obj->{'BorrowableForeign'}) ? (bool) $obj->{'BorrowableForeign'} : null,
            isBookable: isset($obj->{'IsBookable'}) ? (bool) $obj->{'IsBookable'} : null,
            lastUpdate: isset($obj->{'LastUpdate'}) ? (string) $obj->{'LastUpdate'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            int: isset($obj->{'int'}) ? (int) $obj->{'int'} : null,
            string: isset($obj->{'string'}) ? (string) $obj->{'string'} : null,
            idDocumentRequirement: isset($obj->{'ID_DocumentRequirement'}) ? (int) $obj->{'ID_DocumentRequirement'} : null,
            idDocumentPhoto: isset($obj->{'ID_DocumentPhoto'}) ? (int) $obj->{'ID_DocumentPhoto'} : null,
        );
    }
}
