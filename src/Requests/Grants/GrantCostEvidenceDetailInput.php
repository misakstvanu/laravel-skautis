<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantCostEvidenceDetailInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $loadFile = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'LoadFile' => $this->loadFile,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
