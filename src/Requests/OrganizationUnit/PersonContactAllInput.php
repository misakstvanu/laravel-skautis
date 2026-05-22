<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonContactAllInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
        public readonly ?string $idContactType = null,
        public readonly ?bool $isCatalog = null,
        public readonly ?bool $isMain = null,
        public readonly ?bool $isHidden = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            'ID_ContactType' => $this->idContactType,
            'IsCatalog' => $this->isCatalog,
            'IsMain' => $this->isMain,
            'IsHidden' => $this->isHidden,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
