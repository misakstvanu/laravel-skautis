<?php

namespace Misakstvanu\LaravelSkautis\Requests\Exports;

final class ExportLogAllInput
{
    public function __construct(
        public readonly ?int $idExport = null,
        public readonly ?int $idError = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Export' => $this->idExport,
            'ID_Error' => $this->idError,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
