<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantAmountDefaultAllInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventEducationType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventEducationType' => $this->idEventEducationType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
