<?php

namespace Misakstvanu\LaravelSkautis\Requests\TelephonyNetwork;

final class EnrollInsertPersonInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?bool $isValid = null,
        public readonly ?bool $agreement = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Person' => $this->idPerson,
            'ValidFrom' => $this->validFrom,
            'ValidTo' => $this->validTo,
            'IsValid' => $this->isValid,
            'Agreement' => $this->agreement,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
