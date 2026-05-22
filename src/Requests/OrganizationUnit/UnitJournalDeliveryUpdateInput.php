<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitJournalDeliveryUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?string $street = null,
        public readonly ?string $ciry = null,
        public readonly ?string $postCode = null,
        public readonly ?string $firstLine = null,
        public readonly ?string $state = null,
        public readonly ?string $idJournalDeliveryType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Unit' => $this->idUnit,
            'ID_Person' => $this->idPerson,
            'Unit' => $this->unit,
            'RegistrationNumber' => $this->registrationNumber,
            'Street' => $this->street,
            'Ciry' => $this->ciry,
            'PostCode' => $this->postCode,
            'FirstLine' => $this->firstLine,
            'State' => $this->state,
            'ID_JournalDeliveryType' => $this->idJournalDeliveryType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
