<?php

namespace Misakstvanu\LaravelSkautis\Requests\Exports;

final class ExportFunctionEndInput
{
    public function __construct(
        public readonly ?int $idExportLog = null,
        public readonly ?string $nameFormat = null,
        public readonly ?string $settings = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_ExportLog' => $this->idExportLog,
            'NameFormat' => $this->nameFormat,
            'Settings' => $this->settings,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
