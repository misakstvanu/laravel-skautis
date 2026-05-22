<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonAllIdentificationCodeInput
{
    public function __construct(
        public readonly ?string $identificationCode = null,
        public readonly ?string $identificationCodeStartsWith = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'IdentificationCode' => $this->identificationCode,
            'IdentificationCodeStartsWith' => $this->identificationCodeStartsWith,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
