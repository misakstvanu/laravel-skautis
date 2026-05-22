<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonAllUnitRegistrationMistakeInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?string $idContactType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'ID_ContactType' => $this->idContactType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
