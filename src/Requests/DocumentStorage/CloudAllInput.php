<?php

namespace Misakstvanu\LaravelSkautis\Requests\DocumentStorage;

final class CloudAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idDocumentVersion = null,
        public readonly ?string $idCloudState = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_DocumentVersion' => $this->idDocumentVersion,
            'ID_CloudState' => $this->idCloudState,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
