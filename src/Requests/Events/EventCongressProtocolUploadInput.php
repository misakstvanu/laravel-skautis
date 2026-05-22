<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCongressProtocolUploadInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idTempFileProtocol = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_TempFileProtocol' => $this->idTempFileProtocol,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
