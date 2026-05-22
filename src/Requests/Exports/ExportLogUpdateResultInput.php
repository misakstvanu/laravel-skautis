<?php

namespace Misakstvanu\LaravelSkautis\Requests\Exports;

final class ExportLogUpdateResultInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $error = null,
        public readonly ?string $errorDescription = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Error' => $this->error,
            'ErrorDescription' => $this->errorDescription,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
