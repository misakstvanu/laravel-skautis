<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class AlignmentAllInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idUnit = null,
        public readonly ?int $idAlignmentType = null,
        public readonly ?bool $showHistory = null,
        public readonly ?bool $isValid = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_Unit' => $this->idUnit,
            'ID_AlignmentType' => $this->idAlignmentType,
            'ShowHistory' => $this->showHistory,
            'IsValid' => $this->isValid,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
