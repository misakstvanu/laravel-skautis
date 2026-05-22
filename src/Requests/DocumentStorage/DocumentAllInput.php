<?php

namespace Misakstvanu\LaravelSkautis\Requests\DocumentStorage;

final class DocumentAllInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $id = null,
        public readonly ?int $idDocumentVersion = null,
        public readonly ?string $idDocumentClass = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'ID_DocumentVersion' => $this->idDocumentVersion,
            'ID_DocumentClass' => $this->idDocumentClass,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
