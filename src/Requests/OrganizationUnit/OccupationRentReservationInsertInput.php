<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class OccupationRentReservationInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?string $idOccupationRentReservationState = null,
        public readonly ?int $idOccupation = null,
        public readonly ?string $occupationRentReservationState = null,
        public readonly ?int $idOccupationRent = null,
        public readonly ?string $occupationRent = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $estimatedStart = null,
        public readonly ?string $estimatedEnd = null,
        public readonly ?string $realStart = null,
        public readonly ?string $realEnd = null,
        public readonly ?int $estimatedPersonCount = null,
        public readonly ?string $contact = null,
        public readonly ?string $contactPerson = null,
        public readonly ?string $contactPhone = null,
        public readonly ?string $contactMail = null,
        public readonly ?string $rejectionReason = null,
        public readonly ?string $lastUpdate = null,
        public readonly ?string $note = null,
        public readonly ?string $created = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_User' => $this->idUser,
            'ID_OccupationRentReservationState' => $this->idOccupationRentReservationState,
            'ID_Occupation' => $this->idOccupation,
            'OccupationRentReservationState' => $this->occupationRentReservationState,
            'ID_OccupationRent' => $this->idOccupationRent,
            'OccupationRent' => $this->occupationRent,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'RegistrationNumber' => $this->registrationNumber,
            'EstimatedStart' => $this->estimatedStart,
            'EstimatedEnd' => $this->estimatedEnd,
            'RealStart' => $this->realStart,
            'RealEnd' => $this->realEnd,
            'EstimatedPersonCount' => $this->estimatedPersonCount,
            'Contact' => $this->contact,
            'ContactPerson' => $this->contactPerson,
            'ContactPhone' => $this->contactPhone,
            'ContactMail' => $this->contactMail,
            'RejectionReason' => $this->rejectionReason,
            'LastUpdate' => $this->lastUpdate,
            'Note' => $this->note,
            'Created' => $this->created,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
