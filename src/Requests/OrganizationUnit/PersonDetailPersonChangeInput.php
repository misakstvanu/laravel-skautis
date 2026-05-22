<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonDetailPersonChangeInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $code = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'Code' => $this->code,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
