<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class StatementAllInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $idStatementType = null,
        public readonly ?int $year = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_Unit' => $this->idUnit,
            'ID_StatementType' => $this->idStatementType,
            'Year' => $this->year,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
