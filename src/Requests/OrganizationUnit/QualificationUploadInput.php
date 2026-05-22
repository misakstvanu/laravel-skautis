<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class QualificationUploadInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idTempFile = null,
        public readonly ?string $letterExtension = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_TempFile' => $this->idTempFile,
            'LetterExtension' => $this->letterExtension,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
