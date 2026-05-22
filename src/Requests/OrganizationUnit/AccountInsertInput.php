<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class AccountInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $validTo = null,
        public readonly ?int $idBank = null,
        public readonly ?string $bank = null,
        public readonly ?string $accountPrefix = null,
        public readonly ?string $accountNumber = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?string $note = null,
        public readonly ?bool $isMain = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'ValidTo' => $this->validTo,
            'ID_Bank' => $this->idBank,
            'Bank' => $this->bank,
            'AccountPrefix' => $this->accountPrefix,
            'AccountNumber' => $this->accountNumber,
            'Street' => $this->street,
            'City' => $this->city,
            'Postcode' => $this->postcode,
            'Note' => $this->note,
            'IsMain' => $this->isMain,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
