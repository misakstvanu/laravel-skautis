<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonContactInsertInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?int $id = null,
        public readonly ?string $idContactType = null,
        public readonly ?string $value = null,
        public readonly ?bool $isGa = null,
        public readonly ?bool $isCatalog = null,
        public readonly ?bool $isHidden = null,
        public readonly ?string $note = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'ID' => $this->id,
            'ID_ContactType' => $this->idContactType,
            'Value' => $this->value,
            'IsGa' => $this->isGa,
            'IsCatalog' => $this->isCatalog,
            'IsHidden' => $this->isHidden,
            'Note' => $this->note,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
