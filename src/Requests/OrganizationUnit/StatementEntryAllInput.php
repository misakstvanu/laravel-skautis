<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class StatementEntryAllInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idStatement = null,
        public readonly ?int $idStatementEntryType = null,
        public readonly ?bool $isMoney = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_Statement' => $this->idStatement,
            'ID_StatementEntryType' => $this->idStatementEntryType,
            'IsMoney' => $this->isMoney,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
