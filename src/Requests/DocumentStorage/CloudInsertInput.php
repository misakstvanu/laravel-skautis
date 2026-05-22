<?php

namespace Misakstvanu\LaravelSkautis\Requests\DocumentStorage;

final class CloudInsertInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $id = null,
        public readonly ?int $idDocumentVersion = null,
        public readonly ?string $documentVersion = null,
        public readonly ?string $idCloudState = null,
        public readonly ?string $cloudState = null,
        public readonly ?string $cloudGuid = null,
        public readonly ?string $validTo = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'ID_DocumentVersion' => $this->idDocumentVersion,
            'DocumentVersion' => $this->documentVersion,
            'ID_CloudState' => $this->idCloudState,
            'CloudState' => $this->cloudState,
            'CloudGuid' => $this->cloudGuid,
            'ValidTo' => $this->validTo,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
