<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class GoogleGroupUpdateMemberEmailInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $string = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'string' => $this->string,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
