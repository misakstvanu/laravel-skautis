<?php

namespace Misakstvanu\LaravelSkautis\Requests\Reports;

final class StatementDetailInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $showOverview = null,
        public readonly ?string $fileFormat = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ShowOverview' => $this->showOverview,
            'FileFormat' => $this->fileFormat,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
