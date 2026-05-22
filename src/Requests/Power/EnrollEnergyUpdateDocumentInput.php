<?php

namespace Misakstvanu\LaravelSkautis\Requests\Power;

final class EnrollEnergyUpdateDocumentInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $id = null,
        public readonly ?string $idTempFile = null,
        public readonly ?string $idDocumentClass = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'ID_TempFile' => $this->idTempFile,
            'ID_DocumentClass' => $this->idDocumentClass,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
