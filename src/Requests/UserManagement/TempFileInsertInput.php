<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class TempFileInsertInput
{
    public function __construct(
        public readonly ?string $extension = null,
        public readonly ?string $content = null,
        public readonly ?string $hash = null,
        public readonly ?int $size = null,
        public readonly ?string $idApplication = null,
        public readonly ?string $filename = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Extension' => $this->extension,
            'Content' => $this->content,
            'Hash' => $this->hash,
            'Size' => $this->size,
            'ID_Application' => $this->idApplication,
            'Filename' => $this->filename,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
