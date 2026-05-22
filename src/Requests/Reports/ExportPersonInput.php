<?php

namespace Misakstvanu\LaravelSkautis\Requests\Reports;

final class ExportPersonInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $fileFormat = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $sortName = null,
        public readonly ?bool $includeChild = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'FileFormat' => $this->fileFormat,
            'ID_Unit' => $this->idUnit,
            'SortName' => $this->sortName,
            'IncludeChild' => $this->includeChild,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
