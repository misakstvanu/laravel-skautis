<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantAttachmentAllInput
{
    public function __construct(
        public readonly ?int $idGrant = null,
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?string $idFileType = null,
        public readonly ?string $idAttachmentType = null,
        public readonly ?bool $isReal = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Grant' => $this->idGrant,
            'ID' => $this->id,
            'ID_User' => $this->idUser,
            'ID_FileType' => $this->idFileType,
            'ID_AttachmentType' => $this->idAttachmentType,
            'IsReal' => $this->isReal,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
