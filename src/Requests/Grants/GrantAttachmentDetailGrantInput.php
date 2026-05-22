<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantAttachmentDetailGrantInput
{
    public function __construct(
        public readonly ?int $idGrant = null,
        public readonly ?string $idAttachmentType = null,
        public readonly ?int $id = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Grant' => $this->idGrant,
            'ID_AttachmentType' => $this->idAttachmentType,
            'ID' => $this->id,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
