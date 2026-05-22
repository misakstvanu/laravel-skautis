<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonHonourAllPersonInput
{
    public function __construct(
        public readonly ?bool $showHistory = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idHonour = null,
        public readonly ?bool $isValid = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ShowHistory' => $this->showHistory,
            'ID_Person' => $this->idPerson,
            'ID_Honour' => $this->idHonour,
            'IsValid' => $this->isValid,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
