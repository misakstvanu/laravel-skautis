<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OccupationUpdateRealtyInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $publish = null,
        public readonly ?string $note = null,
        public readonly ?bool $isBorrowable = null,
        public readonly ?string $displayName = null,
        public readonly ?string $person = null,
        public readonly ?string $email = null,
        public readonly ?string $phone = null,
        public readonly ?string $web = null,
        public readonly ?string $fotogallery = null,
        public readonly ?string $contactNote = null,
        public readonly ?string $requirements = null,
        public readonly ?int $capacity = null,
        public readonly ?string $capacityNote = null,
        public readonly ?string $accommodationNote = null,
        public readonly ?bool $borrowableForeign = null,
        public readonly ?bool $isBookable = null,
        public readonly ?string $bookUrl = null,
        public readonly ?string $idTempFilePhotoExtension = null,
        public readonly ?string $idTempFileRequirementExtension = null,
        public readonly ?string $string = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Publish' => $this->publish,
            'Note' => $this->note,
            'IsBorrowable' => $this->isBorrowable,
            'DisplayName' => $this->displayName,
            'Person' => $this->person,
            'Email' => $this->email,
            'Phone' => $this->phone,
            'Web' => $this->web,
            'Fotogallery' => $this->fotogallery,
            'ContactNote' => $this->contactNote,
            'Requirements' => $this->requirements,
            'Capacity' => $this->capacity,
            'CapacityNote' => $this->capacityNote,
            'AccommodationNote' => $this->accommodationNote,
            'BorrowableForeign' => $this->borrowableForeign,
            'IsBookable' => $this->isBookable,
            'BookUrl' => $this->bookUrl,
            'ID_TempFilePhotoExtension' => $this->idTempFilePhotoExtension,
            'ID_TempFileRequirementExtension' => $this->idTempFileRequirementExtension,
            'string' => $this->string,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
