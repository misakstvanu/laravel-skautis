<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantAttachmentDetailInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $loadBackup = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'LoadBackup' => $this->loadBackup,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
