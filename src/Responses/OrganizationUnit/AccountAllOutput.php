<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class AccountAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?int $idBank = null,
        public readonly ?string $bank = null,
        public readonly ?string $accountPrefix = null,
        public readonly ?string $accountNumber = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?string $validTo = null,
        public readonly ?string $note = null,
        public readonly ?bool $isMain = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            idBank: isset($obj->{'ID_Bank'}) ? (int) $obj->{'ID_Bank'} : null,
            bank: isset($obj->{'Bank'}) ? (string) $obj->{'Bank'} : null,
            accountPrefix: isset($obj->{'AccountPrefix'}) ? (string) $obj->{'AccountPrefix'} : null,
            accountNumber: isset($obj->{'AccountNumber'}) ? (string) $obj->{'AccountNumber'} : null,
            street: isset($obj->{'Street'}) ? (string) $obj->{'Street'} : null,
            city: isset($obj->{'City'}) ? (string) $obj->{'City'} : null,
            postcode: isset($obj->{'Postcode'}) ? (string) $obj->{'Postcode'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            isMain: isset($obj->{'IsMain'}) ? (bool) $obj->{'IsMain'} : null,
        );
    }
}
