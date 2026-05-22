<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonParseIdentificationCodeInput
{
    public function __construct(
        public readonly ?string $identificationCode = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'IdentificationCode' => $this->identificationCode,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
