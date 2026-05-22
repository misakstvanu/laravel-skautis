<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class GoogleGroupDeleteMemberInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $email = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Email' => $this->email,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
