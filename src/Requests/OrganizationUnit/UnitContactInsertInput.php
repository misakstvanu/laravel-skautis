<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitContactInsertInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?int $id = null,
        public readonly ?bool $publish = null,
        public readonly ?string $idContactType = null,
        public readonly ?string $value = null,
        public readonly ?string $note = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'ID' => $this->id,
            'Publish' => $this->publish,
            'ID_ContactType' => $this->idContactType,
            'Value' => $this->value,
            'Note' => $this->note,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
