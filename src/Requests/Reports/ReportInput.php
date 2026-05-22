<?php

namespace Misakstvanu\LaravelSkautis\Requests\Reports;

final class ReportInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $reportName = null,
        public readonly ?string $fileFormat = null,
        public readonly ?string $fileName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ReportName' => $this->reportName,
            'FileFormat' => $this->fileFormat,
            'FileName' => $this->fileName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
