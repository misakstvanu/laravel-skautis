<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OccupationRentInsertInput
{
    public function __construct(
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

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Occupation' => $this->idOccupation,
            'IsActive' => $this->isActive,
            'DisplayName' => $this->displayName,
            'Email' => $this->email,
            'Phone' => $this->phone,
            'Web' => $this->web,
            'PhotoExtension' => $this->photoExtension,
            'ID_TempFilePhotoExtension' => $this->idTempFilePhotoExtension,
            'Fotogallery' => $this->fotogallery,
            'ContactNote' => $this->contactNote,
            'RequirementExtension' => $this->requirementExtension,
            'ID_TempFileRequirementExtension' => $this->idTempFileRequirementExtension,
            'Requirements' => $this->requirements,
            'Capacity' => $this->capacity,
            'CapacityNote' => $this->capacityNote,
            'AccommodationNote' => $this->accommodationNote,
            'BorrowableForeign' => $this->borrowableForeign,
            'IsBookable' => $this->isBookable,
            'LastUpdate' => $this->lastUpdate,
            'Person' => $this->person,
            'int' => $this->int,
            'string' => $this->string,
            'ID_DocumentRequirement' => $this->idDocumentRequirement,
            'ID_DocumentPhoto' => $this->idDocumentPhoto,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
