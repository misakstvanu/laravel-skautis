<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonDetailMembershipInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $identificationCode = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'IdentificationCode' => $this->identificationCode,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
