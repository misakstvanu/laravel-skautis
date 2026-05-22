<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class StatementCategoryAllInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $idStatementType = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_StatementType' => $this->idStatementType,
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
