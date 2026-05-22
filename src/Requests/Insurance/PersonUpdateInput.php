<?php

namespace Misakstvanu\LaravelSkautis\Requests\Insurance;

final class PersonUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $personDisplayName = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?int $idFunction = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?string $note = null,
        public readonly ?float $amount = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'PersonDisplayName' => $this->personDisplayName,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'RegistrationNumber' => $this->registrationNumber,
            'ID_Function' => $this->idFunction,
            'ValidFrom' => $this->validFrom,
            'ValidTo' => $this->validTo,
            'Note' => $this->note,
            'Amount' => $this->amount,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
