<?php

namespace Misakstvanu\LaravelSkautis\Requests\Summary;

final class ExportPersonViewInput
{
    public function __construct(
        public readonly ?int $id = null,
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
            'ID_Unit' => $this->idUnit,
            'SortName' => $this->sortName,
            'IncludeChild' => $this->includeChild,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
