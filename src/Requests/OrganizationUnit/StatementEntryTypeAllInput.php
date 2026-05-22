<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class StatementEntryTypeAllInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idStatementCategory = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_StatementCategory' => $this->idStatementCategory,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
