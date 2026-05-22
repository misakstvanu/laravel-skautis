<?php

namespace Misakstvanu\LaravelSkautis\Requests\Exports;

final class ExportLogUpdateFileNameInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $fileName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'FileName' => $this->fileName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
