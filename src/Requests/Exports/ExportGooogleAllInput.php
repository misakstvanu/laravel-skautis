<?php

namespace Misakstvanu\LaravelSkautis\Requests\Exports;

final class ExportGooogleAllInput
{
    public function __construct(
        public readonly ?int $idExportLog = null,
        public readonly ?string $settings = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_ExportLog' => $this->idExportLog,
            'Settings' => $this->settings,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
