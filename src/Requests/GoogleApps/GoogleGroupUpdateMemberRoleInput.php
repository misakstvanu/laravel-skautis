<?php

namespace Misakstvanu\LaravelSkautis\Requests\GoogleApps;

final class GoogleGroupUpdateMemberRoleInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $email = null,
        public readonly ?bool $isOwner = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Email' => $this->email,
            'IsOwner' => $this->isOwner,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
