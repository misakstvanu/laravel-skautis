<?php

namespace Misakstvanu\LaravelSkautis\Responses\Insurance;

final class RegistrationDetailOutput
{
    public function __construct(
        public readonly ?string $token = null,
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $iC = null,
        public readonly ?string $invoiceName = null,
        public readonly ?string $invoiceStreet = null,
        public readonly ?string $invoiceCity = null,
        public readonly ?string $invoicePostcode = null,
        public readonly ?string $contactName = null,
        public readonly ?string $contactStreet = null,
        public readonly ?string $contactCity = null,
        public readonly ?string $contactPostcode = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $personName = null,
        public readonly ?string $personEmail = null,
        public readonly ?string $personPhone = null,
        public readonly ?string $created = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            token: isset($obj->{'Token'}) ? (string) $obj->{'Token'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            iC: isset($obj->{'IC'}) ? (string) $obj->{'IC'} : null,
            invoiceName: isset($obj->{'InvoiceName'}) ? (string) $obj->{'InvoiceName'} : null,
            invoiceStreet: isset($obj->{'InvoiceStreet'}) ? (string) $obj->{'InvoiceStreet'} : null,
            invoiceCity: isset($obj->{'InvoiceCity'}) ? (string) $obj->{'InvoiceCity'} : null,
            invoicePostcode: isset($obj->{'InvoicePostcode'}) ? (string) $obj->{'InvoicePostcode'} : null,
            contactName: isset($obj->{'ContactName'}) ? (string) $obj->{'ContactName'} : null,
            contactStreet: isset($obj->{'ContactStreet'}) ? (string) $obj->{'ContactStreet'} : null,
            contactCity: isset($obj->{'ContactCity'}) ? (string) $obj->{'ContactCity'} : null,
            contactPostcode: isset($obj->{'ContactPostcode'}) ? (string) $obj->{'ContactPostcode'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            personName: isset($obj->{'PersonName'}) ? (string) $obj->{'PersonName'} : null,
            personEmail: isset($obj->{'PersonEmail'}) ? (string) $obj->{'PersonEmail'} : null,
            personPhone: isset($obj->{'PersonPhone'}) ? (string) $obj->{'PersonPhone'} : null,
            created: isset($obj->{'Created'}) ? (string) $obj->{'Created'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
