<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonDetailIdentificationCodeInput
{
    public function __construct(
        public readonly ?int $idUnit = null,
        public readonly ?string $identificationCode = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Unit' => $this->idUnit,
            'IdentificationCode' => $this->identificationCode,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
