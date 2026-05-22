<?php

namespace Misakstvanu\LaravelSkautis\Responses\Journal;

final class JournalCopyUpdateGenerateOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idJournalCopyVip = null,
        public readonly ?int $idJournalCopyOrder = null,
        public readonly ?int $idJournalCopyOrderItem = null,
        public readonly ?string $displayName = null,
        public readonly ?float $price = null,
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $postalFirstLine = null,
        public readonly ?string $postalStreet = null,
        public readonly ?string $postalCity = null,
        public readonly ?string $postalPostcode = null,
        public readonly ?string $postalState = null,
        public readonly ?int $amount = null,
        public readonly ?string $email = null,
        public readonly ?string $phone = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idJournalCopyVip: isset($obj->{'ID_JournalCopyVip'}) ? (int) $obj->{'ID_JournalCopyVip'} : null,
            idJournalCopyOrder: isset($obj->{'ID_JournalCopyOrder'}) ? (int) $obj->{'ID_JournalCopyOrder'} : null,
            idJournalCopyOrderItem: isset($obj->{'ID_JournalCopyOrderItem'}) ? (int) $obj->{'ID_JournalCopyOrderItem'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            price: isset($obj->{'Price'}) ? (float) $obj->{'Price'} : null,
            firstName: isset($obj->{'FirstName'}) ? (string) $obj->{'FirstName'} : null,
            lastName: isset($obj->{'LastName'}) ? (string) $obj->{'LastName'} : null,
            postalFirstLine: isset($obj->{'PostalFirstLine'}) ? (string) $obj->{'PostalFirstLine'} : null,
            postalStreet: isset($obj->{'PostalStreet'}) ? (string) $obj->{'PostalStreet'} : null,
            postalCity: isset($obj->{'PostalCity'}) ? (string) $obj->{'PostalCity'} : null,
            postalPostcode: isset($obj->{'PostalPostcode'}) ? (string) $obj->{'PostalPostcode'} : null,
            postalState: isset($obj->{'PostalState'}) ? (string) $obj->{'PostalState'} : null,
            amount: isset($obj->{'Amount'}) ? (int) $obj->{'Amount'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            phone: isset($obj->{'Phone'}) ? (string) $obj->{'Phone'} : null,
        );
    }
}
