<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class OccupationRentReservationDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
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

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            idOccupationRentReservationState: isset($obj->{'ID_OccupationRentReservationState'}) ? (string) $obj->{'ID_OccupationRentReservationState'} : null,
            idOccupation: isset($obj->{'ID_Occupation'}) ? (int) $obj->{'ID_Occupation'} : null,
            occupationRentReservationState: isset($obj->{'OccupationRentReservationState'}) ? (string) $obj->{'OccupationRentReservationState'} : null,
            idOccupationRent: isset($obj->{'ID_OccupationRent'}) ? (int) $obj->{'ID_OccupationRent'} : null,
            occupationRent: isset($obj->{'OccupationRent'}) ? (string) $obj->{'OccupationRent'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            estimatedStart: isset($obj->{'EstimatedStart'}) ? (string) $obj->{'EstimatedStart'} : null,
            estimatedEnd: isset($obj->{'EstimatedEnd'}) ? (string) $obj->{'EstimatedEnd'} : null,
            realStart: isset($obj->{'RealStart'}) ? (string) $obj->{'RealStart'} : null,
            realEnd: isset($obj->{'RealEnd'}) ? (string) $obj->{'RealEnd'} : null,
            estimatedPersonCount: isset($obj->{'EstimatedPersonCount'}) ? (int) $obj->{'EstimatedPersonCount'} : null,
            contact: isset($obj->{'Contact'}) ? (string) $obj->{'Contact'} : null,
            contactPerson: isset($obj->{'ContactPerson'}) ? (string) $obj->{'ContactPerson'} : null,
            contactPhone: isset($obj->{'ContactPhone'}) ? (string) $obj->{'ContactPhone'} : null,
            contactMail: isset($obj->{'ContactMail'}) ? (string) $obj->{'ContactMail'} : null,
            rejectionReason: isset($obj->{'RejectionReason'}) ? (string) $obj->{'RejectionReason'} : null,
            lastUpdate: isset($obj->{'LastUpdate'}) ? (string) $obj->{'LastUpdate'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            created: isset($obj->{'Created'}) ? (string) $obj->{'Created'} : null,
        );
    }
}
