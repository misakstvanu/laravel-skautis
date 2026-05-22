<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class ContactUpdateInvalidInput
{
    public function __construct(
        public readonly ?string $mail = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Mail' => $this->mail,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
