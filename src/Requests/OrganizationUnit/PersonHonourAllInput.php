<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonHonourAllInput
{
    public function __construct(
        public readonly ?bool $isValid = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idHonour = null,
        public readonly ?string $personDisplayName = null,
        public readonly ?string $letterNumber = null,
        public readonly ?string $suggester = null,
        public readonly ?int $yearValidFrom = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'IsValid' => $this->isValid,
            'ID_Person' => $this->idPerson,
            'ID_Honour' => $this->idHonour,
            'PersonDisplayName' => $this->personDisplayName,
            'LetterNumber' => $this->letterNumber,
            'Suggester' => $this->suggester,
            'YearValidFrom' => $this->yearValidFrom,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
