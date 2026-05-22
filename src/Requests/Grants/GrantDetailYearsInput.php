<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantDetailYearsInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idEventEducation = null,
        public readonly ?int $idGrant = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_EventEducation' => $this->idEventEducation,
            'ID_Grant' => $this->idGrant,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
