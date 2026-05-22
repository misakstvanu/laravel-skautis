<?php

namespace Misakstvanu\LaravelSkautis\Requests\Reports;

final class MemberCardThumbnailInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idMemberCardState = null,
        public readonly ?string $memberCardState = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $birthday = null,
        public readonly ?string $idMemberCardType = null,
        public readonly ?string $memberCardType = null,
        public readonly ?int $year = null,
        public readonly ?string $dateCreate = null,
        public readonly ?float $price = null,
        public readonly ?bool $isAuthorized = null,
        public readonly ?bool $isPaid = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?int $idPersonSchool = null,
        public readonly ?string $personSchool = null,
        public readonly ?string $personSchoolCity = null,
        public readonly ?int $idPersonRegistration = null,
        public readonly ?int $idDocumentPersonSchool = null,
        public readonly ?string $unitStredisko = null,
        public readonly ?string $leaderContact = null,
        public readonly ?int $idDocumentMediumPhoto = null,
        public readonly ?string $storageMediumPhoto = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_MemberCardState' => $this->idMemberCardState,
            'MemberCardState' => $this->memberCardState,
            'DisplayName' => $this->displayName,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'Birthday' => $this->birthday,
            'ID_MemberCardType' => $this->idMemberCardType,
            'MemberCardType' => $this->memberCardType,
            'Year' => $this->year,
            'DateCreate' => $this->dateCreate,
            'Price' => $this->price,
            'IsAuthorized' => $this->isAuthorized,
            'IsPaid' => $this->isPaid,
            'ValidFrom' => $this->validFrom,
            'ValidTo' => $this->validTo,
            'ID_PersonSchool' => $this->idPersonSchool,
            'PersonSchool' => $this->personSchool,
            'PersonSchoolCity' => $this->personSchoolCity,
            'ID_PersonRegistration' => $this->idPersonRegistration,
            'ID_DocumentPersonSchool' => $this->idDocumentPersonSchool,
            'UnitStredisko' => $this->unitStredisko,
            'LeaderContact' => $this->leaderContact,
            'ID_DocumentMediumPhoto' => $this->idDocumentMediumPhoto,
            'StorageMediumPhoto' => $this->storageMediumPhoto,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
