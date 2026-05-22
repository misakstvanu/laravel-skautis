<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantTypeAllInput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $forUnit = null,
        public readonly ?bool $forEvent = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ForUnit' => $this->forUnit,
            'ForEvent' => $this->forEvent,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
