<?php

namespace Misakstvanu\LaravelSkautis\Requests\Power;

final class AdvanceTypeDetailInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $id = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
