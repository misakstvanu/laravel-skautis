<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class QualificationRequestAllPersonInput
{
    public function __construct(
        public readonly ?int $idPerson = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Person' => $this->idPerson,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
