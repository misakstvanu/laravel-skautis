<?php

namespace Misakstvanu\LaravelSkautis\Requests\Insurance;

final class RegistrationUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $externalID = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $created = null,
        public readonly ?string $note = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ExternalID' => $this->externalID,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'RegistrationNumber' => $this->registrationNumber,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'Created' => $this->created,
            'Note' => $this->note,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
