<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonDetailSecurityCodeInput
{
    public function __construct(
        public readonly ?string $userName = null,
        public readonly ?string $securityCode = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'UserName' => $this->userName,
            'SecurityCode' => $this->securityCode,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
