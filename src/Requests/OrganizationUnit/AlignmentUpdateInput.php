<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class AlignmentUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?int $idAlignmentType = null,
        public readonly ?string $alignmentType = null,
        public readonly ?string $colorMargin = null,
        public readonly ?string $colorCenter = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'ValidFrom' => $this->validFrom,
            'ValidTo' => $this->validTo,
            'ID_AlignmentType' => $this->idAlignmentType,
            'AlignmentType' => $this->alignmentType,
            'ColorMargin' => $this->colorMargin,
            'ColorCenter' => $this->colorCenter,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
