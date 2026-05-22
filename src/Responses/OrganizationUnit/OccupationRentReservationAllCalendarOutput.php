<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class OccupationRentReservationAllCalendarOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idOccupationRent = null,
        public readonly ?string $occupationRent = null,
        public readonly ?string $contactPerson = null,
        public readonly ?string $contactPhone = null,
        public readonly ?string $contactMail = null,
        public readonly ?int $idRealtyType = null,
        public readonly ?string $realtyType = null,
        public readonly ?string $idOccupationRentReservationState = null,
        public readonly ?string $occupationRentReservationState = null,
        public readonly ?string $start = null,
        public readonly ?string $end = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?bool $isAdminView = null,
        public readonly ?string $calendarICS = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idOccupationRent: isset($obj->{'ID_OccupationRent'}) ? (int) $obj->{'ID_OccupationRent'} : null,
            occupationRent: isset($obj->{'OccupationRent'}) ? (string) $obj->{'OccupationRent'} : null,
            contactPerson: isset($obj->{'ContactPerson'}) ? (string) $obj->{'ContactPerson'} : null,
            contactPhone: isset($obj->{'ContactPhone'}) ? (string) $obj->{'ContactPhone'} : null,
            contactMail: isset($obj->{'ContactMail'}) ? (string) $obj->{'ContactMail'} : null,
            idRealtyType: isset($obj->{'ID_RealtyType'}) ? (int) $obj->{'ID_RealtyType'} : null,
            realtyType: isset($obj->{'RealtyType'}) ? (string) $obj->{'RealtyType'} : null,
            idOccupationRentReservationState: isset($obj->{'ID_OccupationRentReservationState'}) ? (string) $obj->{'ID_OccupationRentReservationState'} : null,
            occupationRentReservationState: isset($obj->{'OccupationRentReservationState'}) ? (string) $obj->{'OccupationRentReservationState'} : null,
            start: isset($obj->{'Start'}) ? (string) $obj->{'Start'} : null,
            end: isset($obj->{'End'}) ? (string) $obj->{'End'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            isAdminView: isset($obj->{'IsAdminView'}) ? (bool) $obj->{'IsAdminView'} : null,
            calendarICS: isset($obj->{'CalendarICS'}) ? (string) $obj->{'CalendarICS'} : null,
        );
    }
}
