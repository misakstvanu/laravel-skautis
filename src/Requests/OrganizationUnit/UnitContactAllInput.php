<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitContactAllInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $idContactType = null,
        public readonly ?bool $publish = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_Unit' => $this->idUnit,
            'ID_ContactType' => $this->idContactType,
            'Publish' => $this->publish,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
